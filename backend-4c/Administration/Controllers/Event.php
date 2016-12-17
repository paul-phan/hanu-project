<?php
/***
 * A mini PHP framework designed with MVC pattern providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 * Created by PhpStorm.
 * event: MyPC
 * Date: 15/09/2016
 * Ti`git pull origin master` me: 5:43 CH
 */
namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools;

class Event extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        header("Refresh:1; url=/admin/event/list", true, 200);
    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $EventModel = new \Administration\Models\Event($co);
        $result = $EventModel->fetchAll();
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
                if ($_FILES) {
                    $image = $_FILES['image'];
                    $upload = new \Library\Tools\Upload();
                    $name = $upload->copy(array(
                        'file' => $image,
                        'path' => 'event/',
                        'name' => time() . '-' . $EventModel->slugify($_POST['title'])
                    ));
                    $_POST['image'] = isset($name) ? $name : 'updatelater.jpg';
                }
                if ($EventModel->insertEvent($_POST)) {

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
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $EventModel = new \Administration\Models\Event($co);
        $event = $EventModel->findById($_GET['params']);
        if ($_POST) {
            if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['address']) && isset($_POST['zipcode']) && isset($_POST['city']) && isset($_POST['schedule']) && isset($_POST['ticket']) && isset($_POST['price'])
            ) {

                if ($_FILES) {
                    $image = $_FILES['image'];
                    $upload = new \Library\Tools\Upload();
                    $name = $upload->copy(array(
                        'file' => $image,
                        'path' => 'event/',
                        'name' => time() . '-' . $EventModel->slugify($_POST['title'])
                    ));
                    $_POST['image'] = isset($name) ? $name : 'updatelater.jpg';
                }

                if ($EventModel->modifyEvent($_POST, $_GET['params'])) {
                    $alert = Tools\Alert::render('Sửa sự kiện thành công, đang trở lại danh sách...!', 'success');
                    header("Refresh:3; url=/admin/event/list", true, 303);
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
            }
        }
        $this->addDataView(array(
            'viewTitle' => 'Sự kiện',
            'viewSiteName' => 'Sửa sự kiện',
            'form' => $event[0],
            'alert' => isset($alert) ? $alert : ''
        ));
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

