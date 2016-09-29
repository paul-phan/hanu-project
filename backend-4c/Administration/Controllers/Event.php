<?php
/**
 * Created by PhpStorm.
 * event: MyPC
 * Date: 15/09/2016
 * Ti`git pull origin master` me: 5:43 CH
 */
namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Core\EventController;
use Library\Tools;

class event extends MainController implements EventController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        header("Refresh:1; url=/admin/event/list", true, 303);
    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $EventModel = new \Administration\Models\Event($co);
        $result = $EventModel->fetchByClause('  ');

        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Sự kiện',
            'events' => $result
        ));
    }

    public function addAction()
    {
        global $connection;
        $co = $connection->getCo();
        $EventModel = new \Administration\Models\Event($co);
        if ($_POST) {
            if (!empty($_POST['title']) && !empty($_POST['price'])) {
                if ($EventModel->insertEvent($_POST)) { //need to refactor this :) work well now.

                    $alert = Tools\Alert::render('Thêm sự kiện thành công, đang trở lại danh sách...!', 'success');
                    header("Refresh:3; url=/admin/event/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Không thành công, vui lòng thử lại...!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
            }
        }

        $this->addDataView(array(
            'viewTitle' => 'Sự kiện',
            'viewSiteName' => 'Thêm sự kiện',
            'form' => $_POST,
            'alert' => isset($alert) ? $alert : ''
        ));
    }

    public function editAction()
    {

    }

    public function deleteAction()
    {
        Tools\Helper::checkRoleAdmin();
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $EventModel = new \Administration\Models\Event($co);
        if (!empty($_POST['submit'])) {
            if ($EventModel->findById($_GET['params'])) {
                if ($EventModel->delete($_GET['params'])) {
                    $alert = Tools\Alert::render('Xóa sự kiện thành công!', 'success');
                    $action = TRUE;
                    header("Refresh:3; url=/admin/event/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('sự kiện này không tồn tại!', 'danger');
                header("Refresh:3; url=/admin/event/list", true, 303);
            }
        }
        $this->addDataView(array(
                'viewTitle' => 'sự kiện',
                'viewSiteName' => 'Xóa sự kiện?',
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
        $eventModel = new \Administration\Models\Event($co);
        $event = $eventModel->findById($id);

        $this->addDataView(array(
            'viewTitle' => 'Chi tiết sự kiện',
            'viewSiteName' => 'Sự kiện',
            'event' => $event[0],
        ));
    }

}

