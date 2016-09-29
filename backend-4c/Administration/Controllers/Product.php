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
        $result = $productModel->fetchByClause(' left JOIN company ON company.id = product.company_id left JOIN image on image.product_id = product.id', 'product.*, image.url as iurl, company.com_name as ccom_name ');

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
        $categories = $categoryModel->fetchAll();
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
        $imageModel = new \Administration\Models\Image($co);
        $productDetail = new \Administration\Models\ProductDetail($co);
        $product = $productModel->findById($id);
        $company = $companyModel->fetchAll();
        $category = $categoryModel->fetchAll();
        $collection = $productCollectionModel->getCollectionByProductId($id);
        if ($_POST['product']) {
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
            'alert' => $alert
        ));
    }

    public function deleteAction()
    {

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
    }

    public function add_companyAction()
    {
        // TODO: Implement add_companyAction() method.
    }

    public function add_imageAction()
    {
        // TODO: Implement add_imageAction() method.
    }

    public function edit_categoryAction()
    {
        // TODO: Implement edit_categoryAction() method.
    }

    public function edit_companyAction()
    {
        // TODO: Implement edit_companyAction() method.
    }

    public function imagesAction()
    {
        // TODO: Implement imagesAction() method.
    }

    public function list_categoryAction()
    {
        // TODO: Implement list_categoryAction() method.
    }

    public function list_companyAction()
    {
        // TODO: Implement list_companyAction() method.
    }
}

