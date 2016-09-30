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
        global $connection;
        $co = $connection->getCo();
        $EventModel = new \Administration\Models\Event($co);
        if(isset($_POST['title'])&&isset($_POST['description'])&&isset($_POST['address'])&&isset($_POST['zipcode'])&&isset($_POST['city'])
            &&isset($_POST['shcedule'])&&isset($_POST['date_start'])&&isset($_POST['date_end'])&&isset($_POST['ticket'])&&isset($_POST['price'])&&$_POST['id']){
            $post=array("tile" =>$_POST['tile'],
                        "description" =>$_POST['description'],
                        "address"=>$_POST['address'],
                        "zipcode"=>$_POST['zipcode'],
                        "shcedule"=>$_POST['shcedule'],
                        "date_start"=>$_POST['date_start'],
                        "date_end"=>$_POST['date_end'],
                        "ticket"=>$_POST['ticket'],
                        "price"=>$_POST['price'],
                                );
            if($EventModel->modifyEvent($post,$_POST['id'])){
                $alert = Tools\Alert::render('Sửa sự kiện thành công, đang trở lại danh sách...!', 'success');
                header("Refresh:3; url=/admin/event/list", true, 303);
            }

        }
        else {
            $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
        }
        $this->addDataView(array(
            'viewTitle' => 'Sự kiện',
            'viewSiteName' => 'Sửa sự kiện',
            'form' => $_POST,
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

