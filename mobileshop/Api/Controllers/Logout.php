<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/13/2016
 * Time: 12:49 PM
 */

namespace Api\Controllers;
use Api\Controllers\ApiController as MainController;

class Logout extends MainController
{
    public function indexAction()
    {
        unset($_SESSION['User']);
        setcookie("user", "", 1);
        setcookie("token", "", 1);
        $this->responseApi(0, 'Bạn đã đăng xuất thành công!', $_SESSION);
    }
}