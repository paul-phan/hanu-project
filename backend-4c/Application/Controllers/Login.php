<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 */

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;
use Library\Tools as Tools;

class Login extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        global $connection;
        $co = $connection->getCo();
        if (!empty($_SESSION['User'])) {
            header('location:/admin');
        }
        if (!empty($_POST['remember'])) {
            //TODO ghi nhớ vào cookie.
        }
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            $modelUser = new \Administration\Models\User($co);
            $result = $modelUser->getUserLogin($_POST['login'], $_POST['password']);
            if (!empty($result)) {
                $_SESSION['User']['id'] = $result->id;
                $_SESSION['User']['username'] = $result->username;
                $_SESSION['User']['id_role'] = $result->id_role;
//                $token = md5(uniqid() . time()); //create random token
//                if ($modelUser->updateToken($token, $result->id)) {
//                    $_SESSION['User']['token'] = $token;
//                }
                $modelUser->updateLastLogin(date("Y:m:d H:i:s"), $result->id);
                header('location:/admin/');
            } else {
                $alert = Tools\Alert::render('Wrong username or password!', 'danger');
            }
        }
        $this->addDataView(array('viewTitle' => 'Thành viên',
            'viewSiteName' => 'Đăng Nhập',
            'alert' => (!empty($alert) ? $alert : '')));
        $this->setLayout('login');
    }
}