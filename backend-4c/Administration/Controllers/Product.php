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
        $result = $productModel->fetchByClause(' left JOIN product_collection ON product_collection.product_id = product.id left JOIN company ON company.id = product.company_id left JOIN image on image.product_id = product.id', 'product.*, image.url as iurl, company.com_name as ccom_name ');

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
                if ($productModel->insertProduct($_POST)) {
                    foreach ($categories as $v) {
                        if (array_key_exists($v->params, $_POST)) {
                            if ($productCollectionModel->insertCollection($productModel->insertedId, $v->id)){
                                echo 'đã thêm category';
                            }
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

    }

    public function deleteAction()
    {

    }

    public function viewAction()
    {

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

