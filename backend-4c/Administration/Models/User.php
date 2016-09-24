<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 * Date: 13/09/2016
 * Time: 11:37 CH
 */

namespace Administration\Models;

use Library\Core\UserModel;
use Library\Core\Model as MainModel;

class User extends MainModel implements UserModel
{
    protected $table = 'user';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }


    public function insertUser($post)
    {
        return $this->insert(array(
            'username' => $post['username'],
            'password' => $this->blowfishHasher($post['password']),
            'token' => md5(uniqid() . time()), //create random token
            'id_role' => isset($post['role']) ? $post['role'] : 4,
            'created' => date("Y:m:d H:i:s"),
            'active' =>  1,
        ));
    }


    public function getUserLogin($login, $password)
    {
        $result = $this->fetchAll("username= '$login'");
        foreach ($result as $k => $v) {
            if ($this->validHasher($password, $result[$k]->password)) {
                return $result[$k];
                break;
            }
        }
        return null;
    }


    public function retrieveLoginByToken($token)
    {
        $result = $this->fetchAll("token= '$token'");
        return isset($result[0]) ? $result[0] : null;
    }


    public function updateToken($token, $id)
    {
        return $this->update(array(
            'token' => isset($token) ? $token : null
        ),
            ' id = ' . $id);
    }


    public function updateLastLogin($time, $id)
    {
        return $this->update(array(
            'last_login' => isset($time) ? $time : ''
        ), ' id = ' . $id);
    }

    public function modifyUser($post, $id)
    {
        // TODO: Implement modifyUser() method.
        return $this->update(array(
            "username" => $post['username'],
            'id_role' => isset($post['role']) ? $post['role'] : 4,
            'active' => isset($post['active']) ? 1 : 0,
        ), 'id = ' . $id);
    }

    public function getUserByUsername($username)
    {
        // TODO: Implement getUserByName() method.
        return $this->fetchAll("username= '$username' ");
    }


}