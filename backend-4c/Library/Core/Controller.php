<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Library\Core;

interface UserController
{
    public function indexAction();

    public function listAction();

    /**
     * add user action
     * parameter: $_POST['username'], $_POST['password'], $_POST['active'] (bằng 1 là active), $_POST['id_role']
     */
    public function addAction();

    /**
     * Trong User Model tạo 1 public method tên updateUser sử dụng phương thức update(post_array, $id) từ lớp Model cha để update
     * Tương tự addAction, những trường có thể sửa:
     * parameter: $_POST['username'], $_POST['password'], $_POST['active'] (bằng 1 là active), $_POST['id_role']
     * tạo model Profile để có thể chỉnh sửa đc bảng profile
     */
    public function editAction();

    /**
     * Xóa user
     * sử dụng phương thức từ model: delete($id)
     */
    public function deleteAction();

    /**
     * Xem profile người dùng
     * Tạo model Profile để lấy data từ trong bảng
     * kết hợp với bảng user, hiển thị ra trang cá nhân người dùng hoàn chỉnh.
     */
    public function viewAction();
}

interface ProductController
{
    /**
     * xem thông tin sản phẩm,
     * yc lấy được thông tin từ các bảng product, product_detail, category, company, image
     */
    public function viewAction();

    /**
     * in danh sách sản phẩm ra table
     */
    public function listAction();

    /**
     * Thêm sản phẩm, yêu cầu nhập đầy đủ thông tin vào bảng product, chọn được category, company cho sản phẩm...
     */
    public function addAction();

    /**
     * Chỉnh sửa thông tin sản phẩm trong bảng product và product detail...
     */
    public function editAction();

    /**
     * xóa
     */
    public function deleteAction();

    public function categoriesAction();

    public function edit_categoryAction();

    public function companiesAction();

    public function add_companyAction();

    public function edit_companyAction();

    /**
     * Xem hình ảnh theo id sản phẩm.
     */
    public function imagesAction();

    public function add_imageAction();
}


class Controller
{
    protected $src_root;
    protected $src_link;
    private $layout = "default";
    private $vars = array(
        "viewSiteName" => "",
        "viewTitle" => "",
        "viewDescription" => "",
        "alert" => ""
    );

    public function __construct()
    {
    }

    /**
     * Render to view files
     * @param array $i
     */
    public function renderView($i)
    {
        //extract giá trị nhập vào từ mảng $i lấy ra được $controller, $action và $type (từ Router)
        extract($i);
        // tạo đường dẫn đến view
        $pathViews = $this->src_root . 'Views/Controllers/' . str_replace($this->src_link, '', $controller) . '/' . str_replace('Action', '', $action) . '.php';
        //Nếu tồn tại file view, tiến hành render
        if (file_exists($pathViews)) {
            //Lấy các giá trị để hiển thị sau khi chạy qua addDataView
            extract($this->vars);
            //turn on output buffering ( dùng để thay thế view)
            ob_start();
            //include view
            include_once $pathViews;
            //Get current buffer contents and delete current output buffer
            $viewContent = ob_get_clean();

            ob_start();
            include_once $this->src_root . 'Views/Layouts/' . $this->getLayout() . '.ptm.php';
            $finalRender = ob_get_clean();

            echo $finalRender;
        } elseif (!empty($_SERVER['HTTP_REFERER'])) {
            header('location :' . $_SERVER['HTTP_REFERER']);
            die();
        } else {
            header('location :', LINK_ROOT);
            die();
        }
    }

    /**
     * This method allows retrieve the layout
     * @return string
     */
    protected function getLayout()
    {
        return $this->layout;
    }

    /**
     * This method allows to add variables to the view
     * @param array $data
     */
    public function addDataView($data)
    {
        $this->vars = array_merge($this->vars, $data);
    }

    /**
     * Function setLayout put a layout.
     * @param string $layout
     */
    public function setLayout($layout)
    {
        $layout_path = APP_ROOT . 'Views/Layouts/' . $layout . '.ptm.php';
        if ((file_exists($layout_path))) {
            $this->layout = $layout;
        } else {
            die('Layout ' . $layout . ' not exist');
        }
        $this->layout = $layout;
    }
}