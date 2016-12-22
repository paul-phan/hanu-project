<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */
namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools;

class Index extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
//        var_dump(Tools\Mmail::send('', '', '', ''));


        header("Refresh:0; url=/admin/dashboard", true, 200);
    }
}