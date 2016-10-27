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


class Account extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        global $connection;
        $co = $connection->getCo();
        if (!isset($_SESSION['User'])) {
            header('location:/auth/login');
        }
        $id = $_SESSION['User']['id'];
        $userModel = new \Administration\Models\User($co);
        $profileModel = new \Administration\Models\Profile($co);
        $roleModel = new \Administration\Models\Role($co);
        $user = $userModel->findById($id);
        $profile = $profileModel->getByUserId($id);
        if (!empty($user[0]->id_role)) {
            $role = $roleModel->findById($user[0]->id_role);
        }
        $this->addDataView([
            'viewTitle' => 'AT-Mobile',
            'viewSiteName' => 'Trang cá nhân',
            'user' => $user[0],
            'profile' => $profile[0],
            'role' => !empty($role[0]) ? $role[0] : ''
        ]);
    }

    public function viewAction()
    {

    }
}