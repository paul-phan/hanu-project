<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 */
namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;
use Library\Tools;

class User extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $userModel = new \Administration\Models\User($co);
        $roleModel = new \Administration\Models\Role($co);
        $users = $userModel->fetchAll();
        $this->responseApi(0, "", $users);
    }


    public function modifyAction()
    {
//        global $connection;
//        $co = $connection->getCo();
//        $userModel = new \Administration\Models\User($co);
//        $profileModel = new \Administration\Models\Profile($co);
//
//        if ($_POST) {
//            if ($_POST['Profile']) {
//                $dataP = $_POST['Profile'];
//                if (!empty($dataP['full_name']) || !empty($dataP['email']) || !empty($dataP['full_name'])) {
//
//                } else {
//                    $this->responseApi(100003);
//                }
//            }
//        } else {
//            $this->responseApi(100003);
//        }

    }

}