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
use Library\Tools;

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

    public function editAction()
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

        if ($_POST) {
            if (isset($_POST['Profile']) && !empty($_POST['Profile'])) {
                $pData = $_POST['Profile'];
                if (!empty($pData['full_name']) && !empty($pData['email']) && !empty($pData['phone']) && !empty($pData['address']) && !empty($pData['city'])) {
                    $cmail = $profileModel->getUserByMail($pData['email']);
                    if (!empty($cmail) && $profile[0]->email != $pData['email']) {
                        $alert = Tools\Alert::render('Email này đã được sử dụng, vui lòng nhập lại!', 'danger');
                    } elseif ($profileModel->editProfile($pData, $id)) {
                        $alert = Tools\Alert::render('Cập nhật thông tin thành công, đang tải lại!', 'success');
                        header("Refresh:3");
                    } else {
                        $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'warning');
                    }
                } else {
                    $alert = Tools\Alert::render('Vui lòng điền đầy đủ thông tin!', 'danger');
                }
            }

            //reset password
            if (isset($_POST['cpw']) && !empty($_POST['cpw'])) {
                $pw = $_POST['cpw'];
                if (!empty($pw['password']) && !empty($pw['npassword']) && !empty($pw['rnpassword'])) {
                    $status = $userModel->updatePassword($id, $pw['password'], $pw['npassword'], $pw['rnpassword']);
                    if ($status === true) {
                        $alert = Tools\Alert::render('Cập nhật mật khẩu thành công, đang tải lại!', 'success');
                        header("Refresh:3");
                    } else {
                        $alert = Tools\Alert::render($status, 'danger');
                    }
                } else {
                    $alert = Tools\Alert::render('Vui lòng điền đầy đủ thông tin!', 'danger');
                }
            }
        }
        if (isset($_FILES['avatar'])) {
            $avatar = $_FILES['avatar'];
            if (!empty($avatar)) {
                $upload = new \Library\Tools\Upload();
                $name = $upload->copy(array(
                    'file' => $avatar,
                    'path' => 'avatar/',
                    'name' => time() . '-' . $user[0]->username
                ));
                if ($upload->getErrors()) {
                    $alert = \Library\Tools\Alert::render($upload->getErrors()[0], 'warning');
                } else {
                    if ($profileModel->updateAvatar($name, $id)) {
                        $_SESSION['User']['avatar'] = $name;
                        $alert = Tools\Alert::render('Cập nhật ảnh đại diện thành công, đang tải lại!', 'success');
                        header("Refresh:3");
                    } else {
                        $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'warning');
                    }
                }
            }
        }
        $this->addDataView([
            'viewTitle' => 'AT-Mobile',
            'viewSiteName' => 'Trang cá nhân',
            'user' => $user[0],
            'profile' => $profile[0],
            'role' => !empty($role[0]) ? $role[0] : '',
            'alert' => !empty($alert) ? $alert : ''
        ]);
    }

    public function subcribeAction()
    {
        global $connection;
        $co = $connection->getCo();
        $sModel = new \Administration\Models\Subcribe($co);
        if (isset($_POST['subcribe'])) {
            if (!empty($_POST['subcribe']) && filter_var($_POST['subcribe'], FILTER_VALIDATE_EMAIL)) {
                $sModel->insert(['email' => $_POST['subcribe']]);
                $alert = Tools\Alert::render('Cảm ơn bạn, chúng tôi sẽ gửi mail cho bạn ngay khi có sản phẩm mới <3', 'success');
            } else {
                $alert = Tools\Alert::render('Email bạn vừa nhập không hợp lệ!', 'warning');
            }
        }
        $this->addDataView([
            'viewTitle' => 'AT-Mobile',
            'viewSiteName' => 'Đăng ký theo dõi',
            'alert' => !empty($alert) ? $alert : ''
        ]);
    }
}