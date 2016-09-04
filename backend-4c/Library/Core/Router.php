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

class Router
{
    protected $src_root;
    protected $src_link;

    public function __construct()
    {
    }

    /**
     * dispatchPage($url)
     * This method allows the manage link
     * @param array $url
     */
    public function dispatchPage($url, $type = 'front')
    {
        $controller = (string)($this->getControllerClassName('index'));
        $action = $this->getActionName('index');

        if (!empty($url[0])) {
            if (file_exists($this->getControllerPath($url[0])) && class_exists($this->getControllerClassName($url[0]))) {
                $controller = $this->getControllerClassName($url[0]);
                array_splice($url, 0, 1);
            } else {
                $controller = $this->getControllerClassName('_404');
            }
        }
        $controller = new $controller;

        if (!empty($url[0])) {
            if (method_exists($controller, $this->getActionName($url[0]))) {
                $action = $this->getActionName($url[0]);
            }
            array_splice($url, 0, 1);
        }

        //Truyền data vào controller
        call_user_func_array(array($controller, $action), $url);
        //truyền data vào controler , action = renderView tham số là mảng giá trị $controller, $action, $type
        call_user_func(array($controller, "renderView"), array('controller' => get_class($controller), 'action' => $action, 'type' => $type));
    }

    /**
     * getControllerClassName($ctrl)
     * This method allows retrieve the name of the class is a controller
     * @param string $ctrl
     * @return string
     */
    private function getControllerClassName($ctrl)
    {
        return $this->src_link . ucfirst(strtolower($ctrl));
    }

    /**
     * getControllerPath($ctrl)
     * This method allow retrieve the path
     * @params string $ctrl
     * @return string
     */
    private function getControllerPath($ctrl)
    {
        return $this->src_root . 'Controllers/' . ucfirst(strtolower($ctrl)) . '.php';
    }

    /**
     * getActionName($act)
     * This method allows retrieve the name of the action
     * @param string $act
     * @return string
     */
    private function getActionName($act)
    {
        return strtolower($act) . 'Action';
    }
}