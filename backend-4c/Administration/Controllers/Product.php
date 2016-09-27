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
        $result = $productModel->fetchByClause(' left JOIN category ON category.id = product.category_id left JOIN company ON company.id = product.company_id left JOIN image on image.product_id = product.id', 'product.*, category.cat_name as cacat_name, image.url as iurl, company.com_name as ccom_name ');

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
        $modelProduct = new \Administration\Models\Product($co);

        if ($modelProduct->insertProduct($_POST)) {
            echo "ok";
        }else{
            echo "sai";
        }
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

