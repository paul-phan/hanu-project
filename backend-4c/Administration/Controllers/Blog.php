<?php
/**
 * Created by PhpStorm.
 * User: ntdha
 * Date: 10/28/2016
 * Time: 5:02 PM
 */
namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools;

class Blog extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        header("Refresh:1; url=/admin/blog/list", true, 200);
    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $blogModel = new \Administration\Models\Blog($co);
        $result = $blogModel->fetchAll();
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Bài viết',
            'blogs' => $result
        ));
    }

    public function addAction()
    {
        global $connection;
        $co = $connection->getCo();
        $blogModel = new \Administration\Models\Blog($co);
        if ($_POST) {
            if ($_FILES) {
                $image = $_FILES['image'];
                $upload = new \Library\Tools\Upload();
                $name = $upload->copy(array(
                    'file' => $image,
                    'path' => 'blog/',
                    'name' => time() . '-' . $blogModel->slugify($_POST['title'])
                ));
                $_POST['image'] = "/Public/upload/blog/" . $name;
            }

            if (!empty($_POST['title']) && !empty($_POST['body'])) {
                if ($blogModel->insertBlog($_POST)) {

                    $alert = Tools\Alert::render('Thêm bài viết thành công, đang trở lại danh sách...!', 'success');
                    header("Refresh:3; url=/admin/blog/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Không thành công, vui lòng thử lại...!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
            }
        }

        $this->addDataView(array(
            'viewTitle' => 'Bài viết',
            'viewSiteName' => 'Thêm bài viết',
            'form' => $_POST,
            'alert' => isset($alert) ? $alert : ''
        ));
    }

    public function editAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $blogModel = new \Administration\Models\Blog($co);
        $blog = $blogModel->findById($_GET['params']);
        if ($_POST) {
            if ($_FILES) {
                $image = $_FILES['image'];
                $upload = new \Library\Tools\Upload();
                $name = $upload->copy(array(
                    'file' => $image,
                    'path' => 'blog/',
                    'name' => time() . '-' . $blogModel->slugify($_POST['title'])
                ));
                $_POST['image'] = "/Public/upload/blog/" . $name;
            }
            if (isset($_POST['title']) && isset($_POST['body'])){
                if ($blogModel->modifyBlog($_POST, $_GET['params'])) {
                    $alert = Tools\Alert::render('Sửa bài viết thành công, đang trở lại danh sách...!', 'success');
                    header("Refresh:3; url=/admin/blog/list", true, 303);
                }

            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
            }
        }
        $this->addDataView(array(
            'viewTitle' => 'Bài viết',
            'viewSiteName' => 'Sửa bài viết',
            'form' => $blog[0],
            'alert' => isset($alert) ? $alert : ''
        ));
    }

    public function deleteAction()
    {
        Tools\Helper::checkRoleAdmin();
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connection;
        $co = $connection->getCo();
        $blogModel = new \Administration\Models\Blog($co);
        if (!empty($_POST['submit'])) {
            if ($blogModel->findById($_GET['params'])) {
                if ($blogModel->delete($_GET['params'])) {
                    $alert = Tools\Alert::render('Xóa bài viết thành công!', 'success');
                    $action = TRUE;
                    header("Refresh:3; url=/admin/blog/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('bài viết này không tồn tại!', 'danger');
                header("Refresh:3; url=/admin/blog/list", true, 303);
            }
        }
        $this->addDataView(array(
                'viewTitle' => 'bài viết',
                'viewSiteName' => 'Xóa bài viết?',
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
        $blogModel = new \Administration\Models\blog($co);
        $blog = $blogModel->findById($id);

        $this->addDataView(array(
            'viewTitle' => 'Chi tiết bài viết',
            'viewSiteName' => 'Bài viết',
            'blog' => $blog[0],
        ));
    }
}

