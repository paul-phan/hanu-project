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
        if (isset($_COOKIE['user']) && isset($_COOKIE['token']) && empty($_SESSION['User'])) {
            global $connection;
            $co = $connection->getCo();
            $userModel = new \Administration\Models\User($co);
            $result = $userModel->retrieveLoginByToken($_COOKIE['token']);
            if (!empty($user) && ($result->username == $_COOKIE['user'])) {
                $roleModel = new \Administration\Models\Role($co);
                $role = $roleModel->findById($result->id_role);
                $_SESSION['User']['id'] = $result->id;
                $_SESSION['User']['username'] = $result->username;
                $_SESSION['User']['role_level'] = $role[0]->level;
                $_SESSION['User']['role_name'] = $role[0]->name;
                $_SESSION['User']['token'] = $_COOKIE['token'];
            }
        }
        if (empty($_SESSION['User'])) {
            header("location:/login");
        }
        // `role_level` is devided from 1 to 4. 1 is admin and only admin can see administration pages.
        if ($_SESSION['User']['role_level'] > 1 || !isset($_SESSION['User']['role_level']) || !is_numeric($_SESSION['User']['role_level'])) {
            echo 'Hello, ';
            echo isset($_SESSION['User']['username']) ? $_SESSION['User']['username'] : 'Customer';
            echo ', you are logged in as ';
            echo isset($_SESSION['User']['role_name']) ? $_SESSION['User']['role_name'] : 'Anonymous';
            header("Refresh:2; url=/", true, 303);
            die;
        }


    }
}