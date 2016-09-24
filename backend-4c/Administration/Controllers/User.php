<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 * Date: 13/09/2016
 * Time: 11:46 CH
 */
namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Core\UserController;
use Library\Tools;

class User extends MainController implements UserController
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

    public function addAction()
    {

        global $connection;
        $co = $connection->getCo();
        $modelRole = new \Administration\Models\Role($co);
        $role = $modelRole->fetchAll();
        $modelUser = new \Administration\Models\User($co);
        $modelProfile = new \Administration\Models\Profile($co);

        if (!empty($_POST)) {
            $usernameResult = $modelUser->getUserByUsername($_POST['username']);
            $emailResult = $modelProfile->getUserByMail($_POST['email']);
            if (!empty($usernameResult)) {
                $alert = Tools\Alert::render("Tài khoản này đã được sử dụng, vui lòng chọn tài khoản khác!.", "danger");
                unset($_POST['username']);
            } elseif (!empty($emailResult)) {
                $alert = Tools\Alert::render("Email này đã được sử dụng, vui lòng chọn email khác", "danger");
                unset($_POST['email']);
            } else {
                if ($modelUser->insertUser($_POST)) {
                    $image = $_FILES['image'];
                    $upload = new \Library\Tools\Upload();
                    $name = $upload->copy(array(
                        'file' => $image,
                        'path' => 'avatar/', //name your optional folder if needed
                        'name' => time() . '-' . $_POST['username'] // name your file name if needed
                    ));
                    $_POST['avatar'] = isset($name) ? $name : 'updatelater.jpg';
                    if ($modelProfile->insertProfile($_POST, $modelUser->insertedId)) {
                        $alert = Tools\Alert::render('Người dùng mới đã thêm thành công!', 'success');
                        header("Refresh:3; url=/admin/user/list", true, 303);
                    } elseif ($upload->getErrors()) {
                        $alert = \Library\Tools\Alert::render($upload->getErrors()[0], 'warning');
                    } else {
                        $alert = $alert = Tools\Alert::render('Người dùng mới đã được tao, tuy nhiên hãy kiểm tra lại profile của bạn!', 'warning');
                    }
                } else {
                    $alert = Tools\Alert::render('Không thành công! Vui lòng kiểm tra lại thông tin đã nhập!', 'danger');
                }
            }
            $form = $_POST;
        }
        //Truyền các biến vào view
        $this->addDataView(array(
            'viewTitle' => 'Quản trị',
            'viewSiteName' => 'Thêm Người dùng',
            'role' => $role,
            'alert' => (!empty($alert)) ? $alert : '',
            'form' => (!empty($form) ? $form : '')

        ));
    }

    //TODO implement edit action

    public function editAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric(); //kiểm tra parameter có phải là số hay ko(edit theo id)
        $id = $_GET['params']; //lấy số id  user người dùng đã bấm
    }

    //TODO implement delete action

    public function deleteAction()
    {

    }

    //TODO implement view action

    public function viewAction()
    {

    }
}