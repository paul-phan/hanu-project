<?php
/**
 * Created by PhpStorm.
 * User: ntdha
 * Date: 11/21/2016
 * Time: 6:01 PM
 */
namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools;

class LienHe extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        header("Refresh:1; url=/admin/LienHe/list", true, 200);
    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $lienHeModel = new \Administration\Models\lienHe($co);
        $result = $lienHeModel->fetchAll();
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Liên hệ',
            'lienHes' => $result
        ));
    }

    public function deleteAction()
    {
        Tools\Helper::checkRoleAdmin();
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $lienHeModel = new \Administration\Models\LienHe($co);
        if (!empty($_POST['submit'])) {
            if ($lienHeModel->findById($_GET['params'])) {
                if ($lienHeModel->delete($_GET['params'])) {
                    $alert = Tools\Alert::render('Xóa liên hệ thành công!', 'success');
                    $action = TRUE;
                    header("Refresh:3; url=/admin/LienHe/list", true, 200);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('liên hệ này không tồn tại!', 'danger');
                header("Refresh:3; url=/admin/LienHe/list", true, 200);
            }
        }
        $this->addDataView(array(
                'viewTitle' => 'liên hệ',
                'viewSiteName' => 'Xóa liên hệ?',
                'action' => (!empty($action)) ? TRUE : FALSE,
                'alert' => (!empty($alert)) ? $alert : '')
        );
    }

    public function viewAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric();
        $id = $_GET['params'];
        global $connection;
        $co = $connection->getCo();
        $lienHeModel = new \Administration\Models\LienHe($co);
        $lienHe = $lienHeModel->findById($id);

        $this->addDataView(array(
            'viewTitle' => 'Chi tiết liên hệ',
            'viewSiteName' => 'liên hệ',
            'lienHe' => $lienHe[0],
        ));
    }
}