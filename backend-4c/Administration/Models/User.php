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
}