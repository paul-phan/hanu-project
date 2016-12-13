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

abstract class AdminController extends MainController
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
        if (!isset($_SESSION['User'])) {
            header("location:/auth/login");
        }
        // `role_level` is devided from 1 to 4. 1 is admin and only admin can see administration pages.
        if ($_SESSION['User']['role_level'] > 1 || !isset($_SESSION['User']['role_level']) || !is_numeric($_SESSION['User']['role_level'])) {
            echo 'Hello, ';
            echo isset($_SESSION['User']['username']) ? $_SESSION['User']['username'] : 'Customer';
            echo ', you are logged in as ';
            echo isset($_SESSION['User']['role_name']) ? $_SESSION['User']['role_name'] : 'Anonymous';
            echo ' please logout and signin with admin account!';
            header("Refresh:2; url=/", true, 200);
            die;

        }
    }

}