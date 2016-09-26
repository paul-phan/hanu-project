<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 15/09/2016
 * Ti`git pull origin master` me: 5:43 CH
 */
namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Core\ProductController;
use Library\Tools;

class Product extends MainController implements ProductController{
    public function __construct(){
        parent::__construct();
    }

    public function indexAction(){
        header("Refresh:1; url=/admin/product/list", true, 303);
    }

    public function listAction(){
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        $result = $productModel->fetchByClause(' left JOIN category ON category.id = product.category_id left JOIN company ON company.id = product.company_id left JOIN image on image.product_id = product.id', 'product.*, category.cat_name as cacat_name, image.url as iurl, company.com_name as ccom_name ');

        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Sản phẩm',
            'products' => $result
        ));
    }

    public function addAction(){

        Tools\Helper::checkRoleAdmin();
        global $connection;
        $co = $connection->getCo();
        $modelRole = new \Administration\Models\Role($co);
        $role = $modelRole->fetchAll();
        $modelProduct = new \Administration\Models\Product($co);
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

    public function editAction(){

    }

    public function deleteAction(){

    }

    public function viewAction(){

    }

}
