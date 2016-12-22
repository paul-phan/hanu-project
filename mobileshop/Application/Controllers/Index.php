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


class Index extends MainController
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
        $eventModel = new \Administration\Models\Event($co);
        $result = $productModel->fetchByClause(' left JOIN company ON company.id = product.company_id left join image on image.product_id = product.id and image.base_image = 1 group by product.id order by created desc limit 8  ', ' product.*,  company.com_name as ccom_name, image.url as iurl, image.label as ilabel ');
        //query promotion event banners
        $time = date("Y-m-d H:i:s");
        $events = $eventModel->fetchByClause(" WHERE date_start < '$time' and date_end > '$time' ");

        $appleProducts = $productModel->fetchByClause('JOIN company ON company.id = product.company_id and product.company_id = 1 left join image on image.product_id = product.id and image.base_image = 1 group by product.id order by created desc limit 8   ', ' product.*,  company.com_name as ccom_name, image.url as iurl, image.label as ilabel ');
        $samsungProducts = $productModel->fetchByClause(' JOIN company ON company.id = product.company_id and product.company_id = 5 left join image on image.product_id = product.id and image.base_image = 1 group by product.id order by created desc limit 8   ', ' product.*,  company.com_name as ccom_name, image.url as iurl, image.label as ilabel ');

        $this->addDataView(array(
            'viewTitle' => 'AT - Mobile',
            'viewSiteName' => 'Trang chủ',
            'product' => $result,
            'events' => $events,
            'apples' => $appleProducts,
            'samsungs' => $samsungProducts
        ));

    }

    public function testAction()
    {
//        echo 'hello';
    }

    public function backendAction()
    {
        $this->setLayout('ajax');
    }

    public function contactAction()
    {
        global $connection;
    }

}
