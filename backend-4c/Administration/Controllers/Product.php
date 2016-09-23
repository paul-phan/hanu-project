<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 15/09/2016
 * Time: 5:43 CH
 */
namespace Administration\Controllers;

use Library\Core\Controller as MainController;

//TODO implement CRUD method for product table, refer to User
class Product extends MainController{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        $this->view->load('abc');
    }
}