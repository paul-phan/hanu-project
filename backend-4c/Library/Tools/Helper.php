<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Library\Tools;

class Helper
{
    /**
     * Kiểm tra tham số là số hay ko
     * This function check if the param you give is numeric
     */
    static function checkUrlParamsIsNumeric()
    {
        if ($_GET['params'] === NULL || $_GET['params'] == '' || !is_numeric($_GET['params'])) {
            header('Location: /admin/404');
            die;
        }
    }

}