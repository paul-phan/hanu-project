<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 15/09/2016
 * Ti`git pull origin master` me: 5:43 CH
 */
namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Core\ProductController;
use Library\Tools;

class Product extends MainController implements ProductController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        header("Refresh:1; url=/admin/product/list", true, 303);
    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        $result = $productModel->fetchByClause(' left JOIN company ON company.id = product.company_id left JOIN image on image.product_id = product.id where product.active = 1 ', 'product.*, image.url as iurl, company.com_name as ccom_name ');

        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Sản phẩm',
            'products' => $result
        ));
    }

    public function addAction()
    {
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        $companyModel = new \Administration\Models\Company($co);
        $categoryModel = new \Administration\Models\Category($co);
        $productCollectionModel = new \Administration\Models\ProductCollection($co);
        $companies = $companyModel->fetchAll();
        $categories = $categoryModel->fetchAll(' active = 1');
        if ($_POST) {
            if (!empty($_POST['title']) && !empty($_POST['company_id']) && !empty($_POST['price'])) {
                if ($productModel->insertProduct($_POST)) { //need to refactor this :) work well now.
                    if (!empty($_POST['category'])) {
                        foreach ($_POST['category'] as $param) {
                            $productCollectionModel->insertCollection($productModel->insertedId, $param); // oneline :p
                        }
                    }
                    $alert = Tools\Alert::render('Thêm sản phẩm thành công, đang trở lại danh sách...!', 'success');
                    header("Refresh:3; url=/admin/product/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Không thành công, vui lòng thử lại...!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
            }
        }
        $this->addDataView(array(
            'viewTitle' => 'Sản phẩm',
            'viewSiteName' => 'Thêm sản phẩm',
            'form' => $_POST,
            'companies' => $companies,
            'categories' => $categories,
            'alert' => isset($alert) ? $alert : ''
        ));
    }

    public function editAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric();
        $id = $_GET['params'];
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        $companyModel = new \Administration\Models\Company($co);
        $categoryModel = new \Administration\Models\Category($co);
        $productCollectionModel = new \Administration\Models\ProductCollection($co);
//        $imageModel = new \Administration\Models\Image($co);
//        $productDetail = new \Administration\Models\ProductDetail($co);
        $product = $productModel->findById($id);
        $company = $companyModel->fetchAll();
        $category = $categoryModel->fetchAll(' active = 1 ');
        $collection = $productCollectionModel->getCollectionByProductId($id);

        if (isset($_POST['product'])) {
            if (!empty($_POST['product']['title']) && !empty($_POST['product']['company_id']) && !empty($_POST['product']['price'])) {
                if ($productModel->modifyProduct($_POST['product'], $id)) {
                    if (!empty($_POST['category'])) {
                        foreach ($_POST['category'] as $param) {
                            $productCollectionModel->updateCollection($id, $param);
                        }
                    }
                    $alert = Tools\Alert::render('Thêm sản phẩm thành công, đang trở lại danh sách...!', 'success');
                    header("Refresh:3; url=/admin/product/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Không thành công, vui lòng thử lại...!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
            }
        }
        $this->addDataView(array(
            'viewTitle' => 'Sản Phẩm',
            'viewSiteName' => 'Chỉnh sửa',
            'fproduct' => $product[0],
            'fcompany' => $company,
            'fcategory' => $category,
            'fcollection' => $collection,
            'form' => $_POST,
            'alert' => !empty($alert) ? $alert : ''
        ));
    }

    public function deleteAction()
    {
        Tools\Helper::checkRoleAdmin();
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        if (!empty($_POST['submit'])) {
            if ($productModel->findById($_GET['params'])) {
                if ($productModel->delete($_GET['params'])) {
                    $alert = Tools\Alert::render('Xóa sản phẩm thành công!', 'success');
                    $action = TRUE;
                    header("Refresh:3; url=/admin/product/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Sản phẩm này không tồn tại!', 'danger');
                header("Refresh:3; url=/admin/order/list", true, 303);
            }
        }
        $this->addDataView(array(
                'viewTitle' => 'Sản phẩm',
                'viewSiteName' => 'Xóa sản phẩm?',
                'action' => (!empty($action)) ? TRUE : FALSE,
                'alert' => (!empty($alert)) ? $alert : '')
        );
    }

    public function viewAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric();
        $id = $_GET['params'];
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        $result = $productModel->fetchByClause("  join company on company.id = product.company_id  where product.id = $id ", " product.*, company.com_name as cname, company.id as cid ");
        $result = $result[0];
        $collectionModel = new \Administration\Models\ProductCollection($co);
        $collection = $collectionModel->fetchByClause(" join category on category.id = product_collection.category_id where product_collection.product_id = $id ", " product_collection.category_id, category.cat_name  ");
        $this->addDataView(array(
            'viewTitle' => 'Sản Phẩm',
            'viewSiteName' => 'Chi tiết',
            'product' => $result,
            'category' => $collection
        ));
    }

    public function add_categoryAction()
    {
        // TODO: Implement add_categoryAction() method.
        global $connection;
        $co = $connection->getCo();
        $categoryModel = new \Administration\Models\Category($co);
        if ($_POST) {
            if (!empty($_POST['cat_name'])) {
                if ($categoryModel->insertCategory($_POST)) {
                    $alert = Tools\Alert::render('Thêm danh mục thành công, đang quay trở lại danh sách!', 'success');
                    header("Refresh:3; url=/admin/product/categories", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin!', 'warning');
            }
        }

        $this->addDataView(array(
            'viewTitle' => 'Danh mục',
            'viewSiteName' => 'Thêm Danh mục',
            'form' => $_POST,
            'alert' => !empty($alert) ? $alert : ''
        ));
    }


    public function edit_categoryAction()
    {
        // TODO: Implement edit_categoryAction() method.
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $categoryModel = new \Administration\Models\Category($co);
        $category = $categoryModel->findById($_GET['params']);
        if ($_POST) {
            if (!empty($_POST['cat_name'])) {
                if ($categoryModel->updateCategory($_POST, $_GET['params'])) {
                    $alert = Tools\Alert::render('Sửa danh mục thành công, đang quay trở lại danh sách!', 'success');
                    header("Refresh:3; url=/admin/product/categories", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin!', 'warning');
            }
        }

        $this->addDataView(array(
            'viewTitle' => 'Danh mục',
            'viewSiteName' => 'Sửa danh mục',
            'form' => $category[0],
            'alert' => !empty($alert) ? $alert : ''
        ));
    }

    public function delete_categoryAction()
    {
        Tools\Helper::checkRoleAdmin();
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $categoryModel = new \Administration\Models\Category($co);
        if (!empty($_POST['submit'])) {
            if ($categoryModel->findById($_GET['params'])) {
                if ($categoryModel->delete($_GET['params'])) {
                    $alert = Tools\Alert::render('Xóa danh mục thành công!', 'success');
                    $action = TRUE;
                    header("Refresh:3; url=/admin/product/categories", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Sản phẩm này không tồn tại!', 'danger');
                header("Refresh:3; url=/admin/product/categories", true, 303);
            }
        }
        $this->addDataView(array(
                'viewTitle' => 'Phân mục',
                'viewSiteName' => 'Xóa phân mục?',
                'action' => (!empty($action)) ? TRUE : FALSE,
                'alert' => (!empty($alert)) ? $alert : '')
        );
    }


    public function categoriesAction()
    {
        // TODO: Implement list_categoryAction() method.
        global $connection;
        $co = $connection->getCo();
        $categoryModel = new \Administration\Models\Category($co);
        $result = $categoryModel->fetchAll(" active = 1 ");
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Phân mục',
            'categories' => $result
        ));
    }

    public function companiesAction()
    {
        // TODO: Implement list_companyAction() method.
        global $connection;
        $co = $connection->getCo();
        $companyModel = new \Administration\Models\Company($co);
        $result = $companyModel->fetchAll(" active = 1 ");
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Hãng sản xuất',
            'companies' => $result
        ));
    }

    public function add_companyAction()
    {
        // TODO: Implement add_companyAction() method.
        global $connection;
        $co = $connection->getCo();
        $companyModel = new \Administration\Models\Company($co);
        if ($_POST) {
            if (!empty($_POST['com_name'])) {
                if ($companyModel->insertCompany($_POST)) {
                    $alert = Tools\Alert::render('Thêm hãng thành công, đang quay trở lại danh sách!', 'success');
                    header("Refresh:3; url=/admin/product/companies", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin!', 'warning');
            }
        }

        $this->addDataView(array(
            'viewTitle' => 'Danh mục',
            'viewSiteName' => 'Thêm Hãng',
            'form' => $_POST,
            'alert' => !empty($alert) ? $alert : ''
        ));
    }

    public function edit_companyAction()
    {
        // TODO: Implement edit_companyAction() method.
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $companyModel = new \Administration\Models\Company($co);
        $company = $companyModel->findById($_GET['params']);
        if ($_POST) {
            if (!empty($_POST['com_name'])) {
                if ($companyModel->updateCompany($_POST, $_GET['params'])) {
                    $alert = Tools\Alert::render('Sửa hãng sản xuất thành công, đang quay trở lại danh sách!', 'success');
                    header("Refresh:3; url=/admin/product/companies", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin!', 'warning');
            }
        }

        $this->addDataView(array(
            'viewTitle' => 'Danh mục',
            'viewSiteName' => 'Sửa hãng sản xuất',
            'form' => $company[0],
            'alert' => !empty($alert) ? $alert : ''
        ));
    }

    public function delete_companyAction()
    {
        Tools\Helper::checkRoleAdmin();
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $companyModel = new \Administration\Models\Company($co);
        if (!empty($_POST['submit'])) {
            if ($companyModel->findById($_GET['params'])) {
                if ($companyModel->delete($_GET['params'])) {
                    $alert = Tools\Alert::render('Xóa hãng thành công!', 'success');
                    $action = TRUE;
                    header("Refresh:3; url=/admin/product/companies", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Hãng này không tồn tại!', 'danger');
                header("Refresh:3; url=/admin/product/companies", true, 303);
            }
        }
        $this->addDataView(array(
                'viewTitle' => 'Phân mục',
                'viewSiteName' => 'Xóa hãng sản xuất?',
                'action' => (!empty($action)) ? TRUE : FALSE,
                'alert' => (!empty($alert)) ? $alert : '')
        );
    }

    public function imagesAction()
    {
        // TODO: Implement imagesAction() method.
    }

    public function add_imageAction()
    {
        // TODO: Implement add_imageAction() method.
    }
}

