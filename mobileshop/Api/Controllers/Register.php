<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 9/29/2016
 * Time: 9:56 PM
 */

namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;
use Library\Core\Model;

class Register extends MainController
{
    public function indexAction()
    {
        global $connection;
        $co = $connection->getCo();
        $modelUser = new \Administration\Models\User($co);
        // check nullity of inputs
        if (isset($_POST['username']) && isset($_POST['password'])) {
            //check existent of user acount
            $usernameResult = $modelUser->getUserByUsername($_POST['username']);
            if (!empty($usernameResult)) {
                $this->responseApi(100004);
            } else {
                // no duplicate
                $result = $modelUser->insertUser($_POST);
                if ($result) {
                    $this->responseApi(0, 'Account Created successfully', $_POST);
                } else {
                    $this->responseApi(110001);
                }
            }
        } else {
            // lack of params
            $this->responseApi(100003);
        }
    }
}