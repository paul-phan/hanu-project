<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 15/09/2016
 * Time: 4:21 CH
 */
namespace Application\Controllers;

use Application\Controllers\AppController as MainController;

class Logout extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        unset($_SESSION['User']);

        $this->addDataView(array("viewTitle" => "Đăng xuất"));
        header("location:/");
    }
}