<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 */
namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;

class Test extends MainController
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