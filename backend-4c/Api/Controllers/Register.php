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
    public function registerAction()
    {
        global $connection;
        $co = $connection->getCo();
        $modelUser = new \Administration\Models\User($co);
        // check nullity of inputs
        if(isset($_POST['username'])&&isset($_POST['password'])){
            // an array that is used to passed into insrtUser()
            $post=array("username" =>$_POST['username'],"password"=>$_POST['password']);
            //check existent of user acount
            if($modelUser->isUserExisted($_POST['username'])){
                $this->responseApi(110004);
            }
            else{
                // no duplicate
                $modelUser->insertUser($post);
                $this->responseApi(0, 'Account Created successfully',$post);
            }
        }
        else{
            // lack of params
            $this->responseApi(100003);
        }
    }
}