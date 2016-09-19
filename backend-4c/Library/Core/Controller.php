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

/**
 * This is main controller
 */
class Controller
{
    protected $src_root;
    protected $src_link;
    private $layout = "default";
    private $responseHeader = "text/html";
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
            header('Content-type: ' . $this->responseHeader . ';charset=UTF-8');
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
     * This method adds the required headers
     * @param string $responseHeader
     */
    protected function setResponseHeader($value)
    {
        $possibility = array(
            "txt" => "text/plain",
            "html" => "text/html",
            "css" => "text/css",
            "js" => "application/javascript",
            "json" => "application/json",
            "xml" => "application/xml",
        );
        if (array_key_exists(strtolower($value), $possibility)) {
            $this->responseHeader = $possibility[$value];
        }
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