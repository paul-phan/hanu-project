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
            $roleModel = new \Administration\Models\Role($co);
            $role = $roleModel->findById($result->id_role);
            $profileModel = new \Administration\Models\Profile($co);
            $profile = $profileModel->getByUserId($result->id);
            if (!empty($result) && !empty($role)) {
                $_SESSION['User']['id'] = $result->id;
                $_SESSION['User']['username'] = $result->username;
                $_SESSION['User']['active'] = $result->active;
                $_SESSION['User']['last_login'] = $result->last_login;
                $_SESSION['User']['created'] = $result->created;
                $_SESSION['User']['update'] = $result->update;
                $_SESSION['User']['full_name'] = $profile[0]->full_name;
                $_SESSION['User']['phone'] = $profile[0]->phone;
                $_SESSION['User']['email'] = $profile[0]->email;
                $_SESSION['User']['address'] = $profile[0]->address;
                $_SESSION['User']['city'] = $profile[0]->city;
                $_SESSION['User']['country'] = $profile[0]->country;
                $_SESSION['User']['avatar'] = $profile[0]->avatar;
                $_SESSION['User']['gender'] = $profile[0]->gender;
                $_SESSION['User']['birthday'] = $profile[0]->birthday;
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
}