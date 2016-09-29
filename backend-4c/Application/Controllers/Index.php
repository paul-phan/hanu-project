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


class Index extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {

        $date = strtotime("December 3, 2014 2:00 PM");
        $remaining = $date - time();
        $days_remaining = floor($remaining / 86400);
        $hours_remaining = floor(($remaining % 86400) / 3600);
        echo '<center>Trang web này đang trong giai đoạn xây dựng, nếu bạn là admin, xin mời vào: <a href="/admin/">Admin Page</a> </center>';
        echo 'This place is for debugging only!';
        var_dump($_GET);
        var_dump($_SESSION);
        var_dump($_COOKIE);
        $this->addDataView(array(
            'viewTitle' => 'Anh Tiến',
            'viewSiteName' => 'Mobile'
        ));
    }

}
