<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;


class Order extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        echo 'updating...';
    }

    public function checkoutAction()
    {
        echo 'updating...';
    }

}