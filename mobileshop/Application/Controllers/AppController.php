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

use Library\Core\Controller as MainController;

class AppController extends MainController
{
    protected $src_root = APP_ROOT;
    protected $src_link = 'Application\\Controllers\\';

    function __construct()
    {
        parent::__construct();
        $this->retrieveLogin();
    }

    protected function retrieveLogin()
    {
        if (isset($_COOKIE['user']) && isset($_COOKIE['token']) && empty($_SESSION['User'])) {
            global $connection;
            $co = $connection->getCo();
            $userModel = new \Administration\Models\User($co);
            $result = $userModel->retrieveLoginByToken($_COOKIE['token']);
            if (!empty($result) && ($result->username == $_COOKIE['user'])) {
                $roleModel = new \Administration\Models\Role($co);
                $role = $roleModel->findById($result->id_role);
                $profileModel = new \Administration\Models\Profile($co);
                $profile = $profileModel->getByUserId($result->id);
                if (!empty($role)) {
                    $_SESSION['User']['id'] = $result->id;
                    $_SESSION['User']['username'] = $result->username;
                    $_SESSION['User']['role_level'] = $role[0]->level;
                    $_SESSION['User']['role_name'] = $role[0]->name;
                    $_SESSION['User']['token'] = $_COOKIE['token'];
                    $_SESSION['User']['avatar'] = isset($profile[0]->avatar) ? $profile[0]->avatar : 'updatelater.jpg';
                    return true;
                }
            }
        }
        return false;
    }
}