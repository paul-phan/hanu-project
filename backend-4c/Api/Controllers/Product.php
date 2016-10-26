<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 */
namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;
use Library\Tools;

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

    //this function is for ajax request (by minh)
    public function get_by_idAction()
    {
        if ($_GET['params'] === NULL || $_GET['params'] == '' || !is_numeric($_GET['params'])) {
            $this->responseApi(100002);
        } else {
            $id = $_GET['params'];
            global $connection;
            $co = $connection->getCo();
            $productModel = new \Administration\Models\Product($co);
            $result = $productModel->fetchByClause("  join company on company.id = product.company_id  left join image on image.product_id = product.id and image.base_image = 1 where product.id = $id ", "  product.*, company.com_name as cname, image.url as iurl, image.label as ilabel ");
            $imageModel = new \Administration\Models\Image($co);
            $images = $imageModel->fetchAll(" product_id = $id ");
            $result = $result[0];
            if (isset($images) && !empty($images)) {
                $result->images = $images;
            }
            if (isset($result) && !empty($result)) {
                $this->responseApi(0, 'fetch ok', $result);
            } else {
                $this->responseApi(130002);
            }
        }
    }

    public function searchAction()
    {
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        if (!empty($_GET['product'])) { //check nullity of get params first
            $value = $_GET['product'];
            $productList = $productModel->fetchByClause("join company on product.company_id = company.id left join image on image.product_id = product.id and image.base_image = 1 WHERE product.title LIKE '%$value%' OR company.com_name LIKE '%$value%' OR product.detail LIKE '%$value%' OR product.sale LIKE '%$value%' OR product.price LIKE '%$value%'OR product.tags LIKE '%$value%' group by product.id", 'distinct product.*, company.com_name, image.url, image.label');
            if (isset($productList)) {
                $this->responseApi(0, 'Fetch product success', $productList);
            } else {
                $this->responseApi(110003);
            }
        }
        $this->responseApi(100003);
    }
}