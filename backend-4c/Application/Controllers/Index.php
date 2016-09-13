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
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                echo json_encode($_GET);
                break;
            case 'POST':
                echo json_encode($_POST);
                break;
            default:
                echo json_encode($_SERVER['REQUEST_METHOD']);
        }
        echo '<br/>';
        global $connection;
        $co = $connection->getCo();
        $model = new \Application\Models\Index($co);
        $test2 = $model->blowfishHasher('12345678');
        $test = '$2a$07$ptm74gg6vIPXuMfmAdl2OuNOb5pRYJ5D7y1fAjb0AiOqp7Be4QS/G';
        echo $test;
        echo '<br>' . $test2;
        if ($this->validHasher(12345678, $test)) {
            echo 'right';
        } else {
            echo 'wrong!';
        }


        $this->setResponseHeader("json");
        $this->addDataView(array("viewTitle" => "Trang Chủ", "viewSiteName" => "Minh", "front" => TRUE));
    }

}
