<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 */

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;
use Library\Tools as Tools;

class Auth extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function loginAction()
    {
        global $connection;
        $co = $connection->getCo();
        if (!empty($_SESSION['User'])) {
            header('location:/admin');
        }
        if ($this->retrieveLogin()) {
            header('location:/admin');
        } elseif (!empty($_POST['login']) && !empty($_POST['password'])) {
            $token = md5(uniqid() . time());
            $modelUser = new \Administration\Models\User($co);
            $result = $modelUser->getUserLogin($_POST['login'], $_POST['password']);
            if (!empty($result)) {
                $roleModel = new \Administration\Models\Role($co);
                $role = $roleModel->findById($result->id_role);
                $profileModel = new \Administration\Models\Profile($co);//lay pròile ra ntn
                $profile = $profileModel->getByUserId($result->id);
                if (!empty($role)) {
                    $_SESSION['User']['id'] = $result->id;// day ms dung la id cua ủe
                    $_SESSION['User']['username'] = $result->username;
                    $_SESSION['User']['role_level'] = $role[0]->level;
                    $_SESSION['User']['role_name'] = $role[0]->name;
                    $_SESSION['User']['avatar'] = isset($profile[0]->avatar) ? $profile[0]->avatar : 'updatelater.jpg';
                    $_SESSION['User']['token'] = $token;
                    if ($modelUser->updateToken($token, $result->id) && !empty($_POST['remember'])) {
                        setcookie("user", $_SESSION['User']['username'], time() + (86400 * 30), '/');
                        setcookie("token", "$token", time() + (86400 * 30), '/');
                    }
                    $modelUser->updateLastLogin(date("Y:m:d H:i:s"), $result->id);
                    if ($role[0]->level == 0) {
                        header('location:/admin/');
                    } else {
                        header('location:/');
                    }
                } else {
                    $alert = Tools\Alert::render('Wrong username or password!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Wrong username or password!', 'danger');
            }
        }
        $this->addDataView(array('viewTitle' => 'Thành viên',
            'viewSiteName' => 'Đăng Nhập',
            'alert' => (!empty($alert) ? $alert : '')));
        $this->setLayout('login');
    }

    public function logoutAction()
    {
        unset($_SESSION['User']);
        setcookie("user", "", 1, '/');
        setcookie("token", "", 1, '/');
        header("location:/");
    }

    public function registerAction()
    {
        global $connection;
        $co = $connection->getCo();
        if (!empty($_SESSION['User'])) {
            echo 'Bạn đang trong trạng thái đăng nhập!';
            header("Refresh:2; url=/", true, 303);
        }
        if ($this->retrieveLogin()) {
            echo 'Bạn đang trong trạng thái đăng nhập!';
            header("Refresh:2; url=/", true, 303);
        } else {
            if ($_POST) {
                $_POST['id_role'] = 4;
                $modelUser = new \Administration\Models\User($co);
                $modelProfile = new \Administration\Models\Profile($co);
                $usernameResult = $modelUser->getUserByUsername($_POST['username']);
                $emailResult = $modelProfile->getUserByMail($_POST['email']);
                if (!empty($usernameResult)) {
                    $alert = Tools\Alert::render("Tài khoản này đã được sử dụng, vui lòng chọn tài khoản khác!.", "danger");
                    unset($_POST['username']);
                } elseif (!empty($emailResult)) {
                    $alert = Tools\Alert::render("Email này đã được sử dụng, vui lòng chọn email khác", "danger");
                    unset($_POST['email']);
                } else {
                    if ($modelUser->insertUser($_POST)) {
                        $image = $_FILES['image'];
                        $upload = new \Library\Tools\Upload();
                        $name = $upload->copy(array(
                            'file' => $image,
                            'path' => 'avatar/', //name your optional folder if needed
                            'name' => time() . '-' . $_POST['username'] // name your file name if needed
                        ));
                        $_POST['avatar'] = isset($name) ? $name : 'updatelater.jpg';
                        if ($modelProfile->insertProfile($_POST, $modelUser->insertedId)) {
                            $alert = Tools\Alert::render('Người dùng mới đã thêm thành công!', 'success');
                            header("Refresh:3; url=/admin/", true, 303);
                        } elseif ($upload->getErrors()) {
                            $alert = \Library\Tools\Alert::render($upload->getErrors()[0], 'warning');
                        } else {
                            $alert = $alert = Tools\Alert::render('Người dùng mới đã được tao, tuy nhiên hãy kiểm tra lại profile của bạn!', 'warning');
                        }
                    } else {
                        $alert = Tools\Alert::render('Không thành công! Vui lòng kiểm tra lại thông tin đã nhập!', 'danger');
                    }
                }
                $form = $_POST;
            }
        }
        //Truyền các biến vào view
        $this->addDataView(array(
            'viewTitle' => 'AT - Moblie',
            'viewSiteName' => 'Đăng ký thành viên',
            'alert' => (!empty($alert)) ? $alert : '',
            'form' => (!empty($form) ? $form : '')
        ));
    }

}