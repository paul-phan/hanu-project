<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 * Date: 13/09/2016
 * Time: 11:46 CH
 */
namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools;

class User extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listAction() {
        global $connection;
        $co = $connection->getCo();
        $userModel = new \Administration\Models\User($co);
        $roleModel = new \Administration\Models\Role($co);
        $users = $userModel->fetchAll();
//        $roles = $roleModel->
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Thành Viên',
            'users' => $users
        ));
    }

    //TODO reimplement add action
    /**
     * add user action
     * parameter: $_POST['username'], $_POST['password'], $_POST['active'] (bằng 1 là active), $_POST['id_role']
     */
    public function addAction()
    {
        global $connection;
        $co = $connection->getCo();
        $modelRole = new \Administration\Models\Role($co);
        $role = $modelRole->fetchAll();
        $modelUser = new \Administration\Models\User($co);

        if (!empty($_POST['username'])) {
            if (empty($_POST['password'])) {
                $alert = Tools\Alert::render('Vui lòng nhập password của bạn!', 'danger');
            } else {
                $modelUser->insertUser($_POST);
                $alert = Tools\Alert::render('Người dùng mới đã thêm thành công!', 'success');
            }
        }
        $this->addDataView(array(
            'viewTitle' => 'Quản trị',
            'viewSiteName' => 'Thêm Người dùng',
            'role' => $role,
            'alert' => (!empty($alert)) ? $alert : ''
        ));


    }

    //TODO implement edit action
    /**
     * Trong User Model tạo 1 public method tên updateUser sử dụng phương thức update(post_array, $id) từ lớp Model cha để update
     * Tương tự addAction, những trường có thể sửa:
     * parameter: $_POST['username'], $_POST['password'], $_POST['active'] (bằng 1 là active), $_POST['id_role']
     * tạo model Profile để có thể chỉnh sửa đc bảng profile
     */
    public function editAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric(); //kiểm tra parameter có phải là số hay ko(edit theo id)
        $id = $_GET['params']; //lấy số id  user người dùng đã bấm
    }

    //TODO implement delete action
    /**
     * Xóa user
     * sử dụng phương thức từ model: delete($id)
     */
    public function deleteAction()
    {

    }

    //TODO implement view action
    /**
     * Xem profile người dùng
     * Tạo model Profile để lấy data từ trong bảng
     * kết hợp với bảng user, hiển thị ra trang cá nhân người dùng hoàn chỉnh.
     */
    public function viewAction() {

    }
}