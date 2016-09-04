<?php

/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Administration\Router;

use Library\Core\Router as MainRouter;


class AdminRouter extends MainRouter
{
    protected $src_root = ADMIN_ROOT;
    protected $src_link = 'Administration\\Controllers\\';

    function __construct()
    {
        parent::__construct();
    }
}