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

        if ($_POST) {
            echo json_encode($_POST);
        } elseif ($_GET) {
            echo json_encode($_GET);
        }

    }
}