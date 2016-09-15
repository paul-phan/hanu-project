<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 * Date: 13/09/2016
 * Time: 11:37 CH
 */

namespace Administration\Models;

use Library\Core\Model as MainModel;

class User extends MainModel
{
    protected $table = 'user';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    /**
     * insertUser() this function will choose/define which data from $_POST method to be inserted to table User
     * @param array $post
     * @return bool
     */
    public function insertUser($post)
    {
        return $this->insert(array(
            'username' => $post['username'],
            'password' => $this->blowfishHasher($post['password']),
            'token' => md5(uniqid() . time()), //create random token
            'id_role' => $post['role'],
            'created' => date("Y:m:d H:i:s")
        ));
    }

    /**
     * TODO getUserLogin
     * @param string $name
     * param string $password
     * @return object result
     */
    public function getUserLogin($login, $password)
    {
        $result = $this->fetchAll("username= '$login'");
        if ($this->validHasher($password, $result[0]->password)) {
            return $result[0];
        } else {
            return null;
        }
    }

    /**
     * function update token
     * @param $token
     * @param $id
     * @return boolean
     */
    public function updateToken($token, $id)
    {
        return $this->update(array(
            'token' => isset($token) ? $token : null
        ),
            ' id = ' . $id);
    }

    /**
     * update last login time
     * @param $time
     * @param $id
     * @return boolean
     */
    public function updateLastLogin($time, $id)
    {
        return $this->update(array(
            'last_login' => isset($time) ? $time : ''
        ), ' id = ' . $id);
    }
}