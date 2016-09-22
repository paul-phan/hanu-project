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

    public function indexAction()
    {
        header("Refresh:1; url=/admin/user/list", true, 303);
    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $userModel = new \Administration\Models\User($co);
        $result = $userModel->fetchByClause(' LEFT JOIN role  ON role.id = user.id_role LEFT JOIN profile on profile.user_id = user.id ', 'user.* , role.name as rname, role.level as rlevel, profile.full_name, profile.email');
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Thành Viên',
            'users' => $result
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
        $modelProfile = new \Administration\Models\Profile($co);

        if (!empty($_POST)) {
            if ($modelUser->insertUser($_POST)) {
                if ($modelProfile->insertProfile($_POST, $modelUser->insertedId)) {
                    $alert = Tools\Alert::render('Người dùng mới đã thêm thành công!', 'success');
                } else {
                    $alert = $alert = Tools\Alert::render('Người dùng mới đã được tao, tuy nhiên hãy kiểm tra lại profile của bạn!', 'warning');
                }
            } else {
                $alert = Tools\Alert::render('Không thành công! Vui lòng kiểm tra lại thông tin đã nhập!', 'danger');
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
    public function viewAction()
    {

    }
}