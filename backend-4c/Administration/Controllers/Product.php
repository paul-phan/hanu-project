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

class Product extends MainController implements ProductController{
    public function __construct(){
        parent::__construct();
    }

    public function indexAction(){
        header("Refresh:1; url=/admin/product/list", true, 303);
    }

    public function listAction(){
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        $result = $productModel->fetchByClause('JOIN category ON category.id=product.category_id JOIN company ON company.id=product.company_id JOIN image.product_id=product.id', 'product.*, category.cat_name, image.url, company.com_name');
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Thành Viên',
            'products' => $result
        ));
    }

    public function addAction(){

    }

    public function editAction(){

    }

    public function deleteAction(){

    }

    public function viewAction(){

    }

}
