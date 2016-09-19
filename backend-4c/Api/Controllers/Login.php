<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 19/09/2016
 * Time: 8:42 CH
 */

namespace Api\Controllers;
use Api\Controllers\ApiController as MainController;

class Login extends MainController
{
    public function indexAction() {
//        $this->responseApi(0, 'test', $_GET);
        global $connection;
        $co = $connection->getCo();
        if (!empty($_COOKIE['user']) && !empty($_COOKIE['token']) && !empty($_SESSION['User'])) {
                $this->responseApi(0, 'You already loggedin!', $_SESSION['User']);
        }
        if (!empty($_GET['username']) && !empty($_GET['password'])) {

        }
    }
}