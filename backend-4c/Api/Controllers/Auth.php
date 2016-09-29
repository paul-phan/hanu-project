<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 19/09/2016
 * Time: 8:42 CH
 */

namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;

class Auth extends MainController
{
    public function loginAction()
    {
        global $connection;
        $co = $connection->getCo();
        if (!empty($_COOKIE['user']) && !empty($_COOKIE['token']) && !empty($_SESSION['User'])) {
            $this->responseApi(0, 'You already loggedin!', $_SESSION['User']);
        } elseif (!empty($_GET['login']) && !empty($_GET['password'])) {
            $token = md5(uniqid() . time());
            $modelUser = new \Administration\Models\User($co);
            $result = $modelUser->getUserLogin($_GET['login'], $_GET['password']);
            $roleModel = new \Administration\Models\Role($co);
            $role = $roleModel->findById($result->id_role);
            if (!empty($result) && !empty($role)) {
                $_SESSION['User']['id'] = $result->id;
                $_SESSION['User']['username'] = $result->username;
                $_SESSION['User']['active'] = $result->active;
                $_SESSION['User']['last_login'] = $result->last_login;
                $_SESSION['User']['created'] = $result->created;
                $_SESSION['User']['update'] = $result->update;
                $_SESSION['User']['full_name'] = $result->full_name;
                $_SESSION['User']['phone'] = $result->phone;
                $_SESSION['User']['email'] = $result->email;
                $_SESSION['User']['address'] = $result->address;
                $_SESSION['User']['city'] = $result->city;
                $_SESSION['User']['country'] = $result->country;
                $_SESSION['User']['avatar'] = $result->avatar;
                $_SESSION['User']['gender'] = $result->gender;
                $_SESSION['User']['birthday'] = $result->birthday;
                $_SESSION['User']['role_level'] = $role[0]->level;
                if ($modelUser->updateToken($token, $result->id)) {
                    setcookie("user", $_SESSION['User']['username'], time() + (86400 * 30), '/');
                    setcookie("token", "$token", time() + (86400 * 30), '/');
                    $_SESSION['User']['token'] = $token;
                }
                $modelUser->updateLastLogin(date("Y:m:d H:i:s"), $result->id);
                $this->responseApi(0, 'Login successfully', $_SESSION['User']);
            } else {
                $this->responseApi(110001);
            }
        } else {
            $this->responseApi(100003);
        }
    }

    public function logoutAction()
    {
        unset($_SESSION['User']);
        setcookie("user", "", 1);
        setcookie("token", "", 1);
        $this->responseApi(0, 'Bạn đã đăng xuất thành công!', $_SESSION);
    }
}