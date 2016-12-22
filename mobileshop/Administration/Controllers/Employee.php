<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools;

class Employee extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        header("Refresh:1; url=/admin/employee/list", true, 200);
    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $EmployeeModel = new \Administration\Models\Employee($co);
        $result = $EmployeeModel->fetchAll();
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Nhân viên',
            'employees' => $result
        ));
    }

    public function addAction()
    {
        global $connection;
        $co = $connection->getCo();
        $EmployeeModel = new \Administration\Models\Employee($co);
        if ($_POST) {
            if (!empty($_POST['employee_name']) && !empty($_POST['dob']) && !empty($_POST['address']) && !empty($_POST['authentication']) && isset($_POST['phone'])) {
                if ($_FILES) {
                    $image = $_FILES['image'];
                    $upload = new \Library\Tools\Upload();
                    $name = $upload->copy(array(
                        'file' => $image,
                        'path' => 'employee/',
                        'name' => time() . '-' . $EmployeeModel->slugify($_POST['employee_name'])
                    ));
                    $_POST['image'] = "/Public/upload/employee/" . $name;
                }
                if ($EmployeeModel->insertEmployee($_POST)) {

                    $alert = Tools\Alert::render('Thêm nhân viên thành công, đang trở lại danh sách...!', 'success');
                    header("Refresh:3; url=/admin/employee/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Không thành công, vui lòng thử lại...!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
            }
        }

        $this->addDataView(array(
            'viewTitle' => 'Nhân viên',
            'viewSiteName' => 'Thêm nhân viên',
            'form' => $_POST,
            'alert' => isset($alert) ? $alert : ''
        ));
    }

    public function editAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $EmployeeModel = new \Administration\Models\Employee($co);
        $Employee = $EmployeeModel->findById($_GET['params']);
        if ($_POST) {
            if (!empty($_POST['employee_name']) && !empty($_POST['dob']) && !empty($_POST['address']) && !empty($_POST['authentication']) && isset($_POST['phone'])) {
                if ($_FILES) {
                    $image = $_FILES['image'];
                    $upload = new \Library\Tools\Upload();
                    $name = $upload->copy(array(
                        'file' => $image,
                        'path' => 'employee/',
                        'name' => time() . '-' . $EmployeeModel->slugify($_POST['employee_name'])
                    ));
                    $_POST['image'] = "/Public/upload/employee/" . $name;
                }

                if ($EmployeeModel->modifyEmployee($_POST, $_GET['params'])) {
                    $alert = Tools\Alert::render('Sửa nhân viên thành công, đang trở lại danh sách...!', 'success');
                    header("Refresh:3; url=/admin/employee/list", true, 303);
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
            }
        }
        $this->addDataView(array(
            'viewTitle' => 'Nhân viên',
            'viewSiteName' => 'Sửa nhân viên',
            'form' => $Employee[0],
            'alert' => isset($alert) ? $alert : ''
        ));
    }

    public function deleteAction()
    {
        Tools\Helper::checkRoleAdmin();
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $EmployeeModel = new \Administration\Models\Employee($co);
        if (!empty($_POST['submit'])) {
            if ($EmployeeModel->findById($_GET['params'])) {
                if ($EmployeeModel->delete($_GET['params'])) {
                    $alert = Tools\Alert::render('Xóa nhân viên thành công!', 'success');
                    $action = TRUE;
                    header("Refresh:3; url=/admin/employee/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Nhân viên này không tồn tại!', 'danger');
                header("Refresh:3; url=/admin/employee/list", true, 303);
            }
        }
        $this->addDataView(array(
                'viewTitle' => 'nhân viên',
                'viewSiteName' => 'Xóa nhân viên?',
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
        $EmployeeModel = new \Administration\Models\Employee($co);
        $Employee = $EmployeeModel->findById($id);

        $this->addDataView(array(
            'viewTitle' => 'Chi tiết nhân viên',
            'viewSiteName' => 'Nhân viên',
            'employee' => $Employee[0],
        ));
    }

    public function calculateAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric();
        $id = $_GET['params'];
        global $connection;
        $co = $connection->getCo();
        $EmployeeModel = new \Administration\Models\Employee($co);
        $Employee = $EmployeeModel->findById($id);
        if ($_POST) {
            if (!empty($_POST['year']) && !empty($_POST['month']) && !empty($_POST['day'])) {
                if ($EmployeeModel->insertSalary($_POST)) {
                    $alert = Tools\Alert::render('Tính lương thành công, đang trở lại danh sách...!', 'success');
                    header("Refresh:3; url=/admin/employee/salary", true, 303);
                } else {
                    $alert = Tools\Alert::render('Không thành công, vui lòng thử lại...!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
            }
        }

        $this->addDataView(array(
            'viewTitle' => 'Nhân viên',
            'viewSiteName' => 'Tính lương',
            'form' => $_POST,
            'employee' => $Employee[0],
            'alert' => isset($alert) ? $alert : ''
        ));

    }

    public function salaryAction()
    {
        global $connection;
        $co = $connection->getCo();
        $EmployeeModel = new \Administration\Models\Employee($co);
        $result1=$EmployeeModel->displaySalary();
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Bảng lương',
            'salary' => $result1
        ));
    }
}

