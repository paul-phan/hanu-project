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
    public function indexAction()
    {
        global $connection;
        $co = $connection->getCo();
        if (!empty($_COOKIE['user']) && !empty($_COOKIE['token']) && !empty($_SESSION['User'])) {
            $this->responseApi(0, 'You already loggedin!', $_SESSION['User']);
        } elseif (!empty($_GET['login']) && !empty($_GET['password'])) {
            $token = md5(uniqid() . time());
            $modelUser = new \Administration\Models\User($co);
            $result = $modelUser->getUserLogin($_GET['login'], $_GET['password']);
            if (!empty($result)) {
                $_SESSION['User']['id'] = $result->id;
                $_SESSION['User']['username'] = $result->username;
                $_SESSION['User']['id_role'] = $result->id_role;
                $_SESSION['User']['token'] = $token;
                $modelUser->updateToken($token, $result->id);
                setcookie("user", $_GET['login'], time() + (86400 * 30));
                setcookie("token", "$token", time() + (86400 * 30));
                $modelUser->updateLastLogin(date("Y:m:d H:i:s"), $result->id);
                $this->responseApi(0, 'Login successfully', $_SESSION['User']);
            } else {
                $this->responseApi(110001);
            }
        } else {
            $this->responseApi(100003);
        }
    }
}