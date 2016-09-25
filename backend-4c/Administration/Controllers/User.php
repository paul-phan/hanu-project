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
        $result = $userModel->fetchByClause(' LEFT JOIN role  ON role.id = user.id_role LEFT JOIN profile on profile.user_id = user.id where 1 order by created desc  ', 'user.* , role.name as rname, role.level as rlevel, profile.full_name, profile.email, profile.active as pactive, profile.address, profile.city, profile.avatar, profile.gender, profile.birthday, profile.country, profile.phone');
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Thành Viên',
            'users' => $result
        ));
    }

    //TODO reimplement add action

    public function addAction()
    {
        Tools\Helper::checkRoleAdmin();
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
        Tools\Helper::checkRoleAdmin();
        $id = $_GET['params']; //lấy số id  user người dùng đã bấm
        global $connection;
        $co = $connection->getCo();
        $userModel = new \Administration\Models\User($co);
        $roleModel = new \Administration\Models\Role($co);
        $profileModel = new \Administration\Models\Profile($co);
        //Hiển thị ra form để edit
        $formUser = $userModel->findById($id);
        $formProfile = $profileModel->getByUserId($id);
        $role = $roleModel->fetchAll();
        $right = Tools\Helper::checkRoleAdmin();
        if ($_POST) {
            $usernameResult = $userModel->getUserByUsername($_POST['username']);
            $emailResult = $profileModel->getUserByMail($_POST['email']);
            if (!empty($usernameResult) && $_POST['username'] != $formUser[0]->username) {
                $alert = Tools\Alert::render('Tên tài khoản này đã tồn tại. Vui lòng nhập lại!', 'danger');
            } elseif (!empty($emailResult) && $_POST['email'] != (isset($formProfile[0]->email) ? $formProfile[0]->email : false)) {
                $alert = Tools\Alert::render('Tên email này đã tồn tại. Vui lòng nhập lại!', 'danger');
            } else {
                if (!$right) {
                    $_POST['role'] = $formUser[0]->id_role;
                }
                if (!empty($_POST['password'])) {
                    $userModel->update(array('password' => $userModel->blowfishHasher($_POST['password'])), ' id = ' . $id);
                }
                if ($userModel->modifyUser($_POST, $id)) {
                    $image = $_FILES['image'];
                    if (!empty($image)) {
                        $upload = new \Library\Tools\Upload();
                        $name = $upload->copy(array(
                            'file' => $image,
                            'path' => 'avatar/', //name your optional folder if needed
                            'name' => time() . '-' . $_POST['username'] // name your file name if needed
                        ));
                        $_POST['avatar'] = (isset($name) && !empty($_FILES['image'])) ? $name : (isset($formProfile[0]->avatar) ? $formProfile[0]->avatar : 'updatelater.jpg');
                    }
                    if (!empty($_POST['avatar'])) {
                        $_SESSION['User']['avatar'] = $_POST['avatar'];
                    }
                    if (!empty($formProfile) && $profileModel->modifyProfile($_POST, $id)) {
                        $alert = Tools\Alert::render('Tài khoản ' . $_POST['username'] . ' đã được chỉnh sửa thành công! ', 'success');
                        header("Refresh:3; url=/admin/user/list", true, 303);
                    } elseif (empty($formProfile) && $profileModel->insertProfile($_POST, $id)) {
                        $alert = Tools\Alert::render('Tài khoản ' . $_POST['username'] . ' đã được chỉnh sửa thành công! ', 'success');
                        header("Refresh:3; url=/admin/user/list", true, 303);
                    } elseif ($upload->getErrors()) {
                        $alert = \Library\Tools\Alert::render($upload->getErrors()[0], 'warning');
                    } else {
                        $alert = Tools\Alert::render('Tài khoản ' . $_POST['username'] . ' đã thay đổi, tuy nhiên thông tin cá nhân cần được cập nhật! ', 'warning');
                    }
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại! ', 'danger');
                }
            }
        } else {
//                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin theo yêu cầu! ', 'danger');
        }

        //truyền dữ liệu vào view
        $this->addDataView(array(
            'viewTitle' => 'Thành viên',
            'viewSiteName' => 'Chỉnh sửa',
            'role' => $role,
            'formUser' => !empty($formUser) ? $formUser[0] : '',
            'formProfile' => !empty($formProfile) ? $formProfile[0] : '',
            'alert' => (!empty($alert) ? $alert : ''),
            'right' => $right
        ));
    }

    //TODO implement delete action

    public function deleteAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric();
        Tools\Helper::checkRoleAdmin();
        global $connection;
        $co = $connection->getCo();
        $modelUser = new \Administration\Models\User($co);
        if (!empty($_POST['submit'])) {
            if ($modelUser->findById($_GET['params'])) {
                $modelUser->delete($_GET['params']);
                $alert = Tools\Alert::render('Xóa thành viên thành công!', 'success');
                $action = TRUE;
                header("Refresh:3; url=/admin/user/list", true, 303);
            } else {
                $alert = Tools\Alert::render('Người dùng này không tồn tại!', 'danger');
                header("Refresh:3; url=/admin/user/list", true, 303);
            }
        }
        $this->addDataView(array(
                'viewTitle' => 'Thành viên',
                'viewSiteName' => 'Xóa thành viên?',
                'action' => (!empty($action)) ? TRUE : FALSE,
                'alert' => (!empty($alert)) ? $alert : '')
        );
    }

    //TODO implement view action

    public function viewAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric();
        $id = $_GET['params'];
        global $connection;
        $co = $connection->getCo();
        $userModel = new \Administration\Models\User($co);
        $profileModel = new \Administration\Models\Profile($co);
        $roleModel = new \Administration\Models\Role($co);
        $user = $userModel->findById($id);
        $profile = $profileModel->getByUserId($id);
        if (!empty($user[0]->id_role)) {
            $role = $roleModel->findById($user[0]->id_role);
        }
        $this->addDataView(array(
            'viewTitle' => 'Trang cá nhân',
            'viewSiteName' => 'Thành Viên',
            'user' => $user[0],
            'profile' => $profile[0],
            'role' => !empty($role[0]) ? $role[0] : ''
        ));
    }
}