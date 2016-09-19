<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Administration\Controllers;

use Library\Core\Controller as MainController;

class AdminController extends MainController
{
    protected $src_root = ADMIN_ROOT;
    protected $src_link = 'Administration\Controllers\\';

    public function __construct()
    {
        parent::__construct();
        $this->loginVerify();
    }

    public function loginVerify()
    {
        if (empty($_SESSION['User'])) {
            header("location:/login");
        }
        // `id_role` is devided from 1 to 4. 1 is admin and only admin can see administration pages.
        elseif ($_SESSION['User']['id_role'] > 1 || empty($_SESSION['User']['id_role'])) {
            $alert = 'Bạn không phải admin để có thể truy cập';
            unset($_SESSION['User']);
            setcookie("user", "", 1);
            setcookie("token", "", 1);
            $this->addDataView(array("viewTitle" => "Đăng xuất", isset($alert) ? $alert : ''));
            echo 'Bạn không phải admin để có thể truy cập';
            header( "Refresh:5; url=/", true, 303);
        }
    }
}