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

    static function checkRoleAdmin()
    {
        if ($_GET['params'] === $_SESSION['User']['id']) {
            return false;
        } elseif (empty($_SESSION['User']) || !is_numeric($_SESSION['User']['role_level']) || $_SESSION['User']['role_level'] > 0 || empty($_SESSION['User']['token'])) {
            echo 'Hello, ';
            echo isset($_SESSION['User']['username']) ? $_SESSION['User']['username'] : 'Customer';
            echo ', you are logged in as ';
            echo isset($_SESSION['User']['role_name']) ? $_SESSION['User']['role_name'] : 'Anonymous';
            echo ' please logout and signin with admin account to continue this action!';
            header("Refresh:4; url=/admin", true, 200);
            die;
        }  elseif($_SESSION['User']['role_level'] == 0) {
            return true;
        }
    }
}