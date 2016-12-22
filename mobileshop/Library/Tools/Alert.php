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

class Alert
{
    /**
     * Function render allows to get the good alert
     * @param  $msg
     * @param  $type (success,info,warning,danger)
     * @return $output
     */
    static function render($msg = "", $type = "info")
    {
        $class = "";
        switch ($type) {
            case "success":
                $class = "alert-success";
                break;
            case "info":
                $class = "alert-info";
                break;
            case "warning":
                $class = "alert-warning";
                break;
            case "danger":
                $class = "alert-danger";
                break;

            default:
                $class = "alert-info";
                break;
        }
        $output = "<div class='msg-alert alert $class' role='alert'><strong>$msg</strong></div>";
        return $output;
    }
}