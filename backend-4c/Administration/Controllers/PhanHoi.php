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

class PhanHoi extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        header("Refresh:1; url=/admin/phanHoi/list", true, 303);
    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $phanHoiModel = new \Administration\Models\PhanHoi($co);
        $result = $phanHoiModel->fetchAll();
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Phản hồi',
            'phanHois' => $result
        ));
    }

    public function deleteAction()
    {
        Tools\Helper::checkRoleAdmin();
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $phanHoiModel = new \Administration\Models\PhanHoi($co);
        if (!empty($_POST['submit'])) {
            if ($phanHoiModel->findById($_GET['params'])) {
                if ($phanHoiModel->delete($_GET['params'])) {
                    $alert = Tools\Alert::render('Xóa phản hồi thành công!', 'success');
                    $action = TRUE;
                    header("Refresh:3; url=/admin/phanHoi/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('phản hồi này không tồn tại!', 'danger');
                header("Refresh:3; url=/admin/phanHoi/list", true, 303);
            }
        }
        $this->addDataView(array(
                'viewTitle' => 'phản hồi',
                'viewSiteName' => 'Xóa phản hồi?',
                'action' => (!empty($action)) ? TRUE : FALSE,
                'alert' => (!empty($alert)) ? $alert : '')
        );
    }

    public function replyAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric();
        $id = $_GET['params'];
        global $connection;
        $co = $connection->getCo();
        $phanHoiModel = new \Administration\Models\PhanHoi($co);
        $phanHoi = $phanHoiModel->findById($id);

        $this->addDataView(array(
            'viewTitle' => 'Chi tiết phản hồi',
            'viewSiteName' => 'Phản hồi',
            'phanHoi' => $phanHoi[0],
        ));

        if ($_POST) {
            if (!empty($_POST['message'])) {
                if ($phanHoiModel->insertPhanHoi($_POST)) {

                    $alert = Tools\Alert::render('Reply thành công, đang trở lại danh sách...!', 'success');
                    header("Refresh:3; url=/admin/phanHoi/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Reply không thành công, vui lòng thử lại...!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
            }
        }

        $this->addDataView(array(
            'viewTitle' => 'Reply',
            'viewSiteName' => 'Reply phản hồi của khách',
            'form' => $_POST,
            'alert' => isset($alert) ? $alert : ''
        ));
    }

    public function viewAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric();
        $id = $_GET['params'];
        global $connection;
        $co = $connection->getCo();
        $phanHoiModel = new \Administration\Models\PhanHoi($co);
        $phanHoi = $phanHoiModel->findById($id);

        $this->addDataView(array(
            'viewTitle' => 'Chi tiết phản hồi',
            'viewSiteName' => 'Phản hồi',
            'phanHoi' => $phanHoi[0],
        ));
    }
    
    
}