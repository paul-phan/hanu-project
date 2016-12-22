<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;


class Product extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        $params = $_GET['action'];
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        $result = $productModel->fetchByClause(" left join product_detail as pdetail on pdetail.product_id = product.id  join company on company.id = product.company_id left join image on image.product_id = product.id and image.base_image = 1  where product.params = '$params' ", " pdetail.*, product.*, company.com_name, company.id as cid, image.url ");
        $result = $result[0];
        if (!isset($result) || empty($result)) {
            header('Location: /404');
        }
        $id = $result->id;
        $collectionModel = new \Administration\Models\ProductCollection($co);
        $collection = $collectionModel->fetchByClause(" join category on category.id = product_collection.category_id where product_collection.product_id = $id ", " product_collection.category_id, category.cat_name  ");
        $imageModel = new \Administration\Models\Image($co);
        $images = $imageModel->fetchAll(" product_id = $id ");
        $this->addDataView(array(
            'viewTitle' => 'Sản Phẩm',
            'viewSiteName' => 'Chi tiết',
            'product' => $result,
            'category' => $collection,
            'images' => $images
        ));
    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        $categoryModel = new \Administration\Models\Category($co);
        $orderBy = '';
        $limit = '';
//        var_dump($_GET);
        if (!empty($_GET['sort'])) {
            $sort = $_GET['sort'];
            switch ($sort) {
                case 'NDESC':
                    $orderBy = " order by product.title DESC";
                    break;
                case 'NASC':
                    $orderBy = " order by product.title NASC";
                    break;
                case 'PDESC':
                    $orderBy = " order by product.price DESC";
                    break;
                case 'PASC':
                    $orderBy = " order by product.price PASC";
                    break;
                case 'DDESC':
                    $orderBy = " order by product.updated DESC";
                    break;
                case 'DASC':
                    $orderBy = " order by product.updated ASC";
                    break;
                default:
                    $orderBy = "";
                    break;
            }
        }
        if (!empty($_GET['limit'])) {
            $sort = $_GET['limit'];
            switch ($sort) {
                case '1':
                    $limit = " limit 12";
                    break;
                case '2':
                    $limit = " limit 24";
                    break;
                case '3':
                    $limit = " limit 36";
                    break;
                default:
                    $limit = " limit 12";
                    break;
            }
        }
        if (!empty($_GET['params'])) {
            $value = $_GET['params'];
            $results = $productModel->fetchByClause("JOIN company ON company.id = product.company_id  left join image on image.product_id = product.id and image.base_image = 1 WHERE product.title LIKE '%$value%' OR company.com_name LIKE '%$value%' OR product.detail LIKE '%$value%' OR product.sale LIKE '%$value%' OR product.price LIKE '%$value%'OR product.tags LIKE '%$value%' group by product.id  " . $orderBy . $limit, ' product.*,  company.com_name as ccom_name, image.url as iurl, image.label as ilabel ');
        } else {
            $results = $productModel->fetchByClause(' left JOIN company ON company.id = product.company_id left join image on image.product_id = product.id and image.base_image = 1 group by product.id ' . $orderBy . $limit, ' product.*,  company.com_name as ccom_name, image.url as iurl, image.label as ilabel ');
        }

        $categories = $categoryModel->fetchAll();
        $this->addDataView([
            "viewTitle" => "AT-Mobile",
            "viewSiteName" => !empty($_GET['params']) ? $_GET['params'] : "Tất cả sản phẩm",
            "products" => $results,
            "categories" => $categories
        ]);
    }

    public function wish_listAction()
    {
        echo 'hello';
    }


}