<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/3/2016
 * Time: 10:10 AM
 */

namespace Api\Controllers;
use Api\Controllers\ApiController as MainController;

class MainListItems extends  MainController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function indexAction()
    {
        global $connection;
        $co = $connection->getCo();
        $eventModel= new \Administration\Models\Event($co);
        if(isset($_GET["value"])) {
            $pageNum = $_GET["value"];
            $rs = $eventModel->pagination($pageNum);
            if(!empty($rs)) {
                $this->responseApi(0, "page : $pageNum", $rs);
            }
            else{
                $this->responseApi(110003);
            }
        }
        else{
            $this->responseApi(100003);
        }

    }
}