<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 */
namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;
use Library\Tools;
use Library\Core\Model;

class Product extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        // construct the SQL request
        if (!empty($_GET['product'])) { //check nullity of get params first
            $sql = $productModel->conStructSQL($_GET["product"]);
            $productList = $productModel->fetchMatchedFields($sql);
        }
        // check for nullity of array $productList
        if (!empty($productList)) {
            $this->responseApi(0, "fetch successfully", $productList);
        } else {
            $this->responseApi(130002);
        }
    }
}