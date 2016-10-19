<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 */
namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;
use Library\Tools;

class Order extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add_orderAction()
    {
        $cart = [];

        if ($_POST) {
            $this->responseApi(0, 'responsed...', $_POST);
        } else {
            $this->responseApi(100003);
        }
    }


}