<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 13/09/2016
 * Time: 11:55 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;
use Library\Core\ProfileModel;

class Profile extends MainModel implements ProfileModel
{
    protected $table = 'profile';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertProfile($post, $userId)
    {
        return $this->insert(array(
            'user_id' => $userId,
            'full_name' => $post['fullname'],
            'gender' => isset($post['gender']) ? 1 : 0,
            'phone' => $post['phone'],
            'address' => $post['address'],
            'email' => $post['email'],
            'city' => $post['city'],
            'birthday' => date('Y-m-d', strtotime($post['birthday'])),
            'country' => $post['country'],
            'active' => 1,
            'created' => date("Y:m:d H:i:s"),
            'avatar' => isset($post['avatar']) ? $post['avatar'] : 'updatelater.jpg'
        ));
    }

    public function modifyProfile($post, $id)
    {
        return $this->update(array(
            'full_name' => $post['fullname'],
            'gender' => isset($post['gender']) ? 1 : 0,
            'phone' => $post['phone'],
            'address' => $post['address'],
            'email' => $post['email'],
            'city' => $post['city'],
            'birthday' => date('Y-m-d', strtotime($post['birthday'])),
            'country' => $post['country'],
            'active' => isset($post['active']) ? 1 : 0,
            'avatar' => $post['avatar']
        ), " user_id = " . $id);
    }

    //Modify profile user from front-end (customer)
    public function editProfile($post, $id)
    {
        return $this->update(array(
            'full_name' => $post['full_name'],
            'gender' => isset($post['gender']) ? 1 : 0,
            'phone' => $post['phone'],
            'address' => $post['address'],
            'email' => $post['email'],
            'city' => $post['city'],
            'birthday' => date('Y-m-d', strtotime($post['birthday'])),
            'country' => $post['country'],
        ), " user_id = " . $id);
    }

    public function updateAvatar($name, $id)
    {
        return $this->update(array(
            'avatar' => $name
        ), " user_id = " . $id);
    }


    public function getUserByMail($mail)
    {
        return $this->fetchAll("email= '$mail' ");
    }

    /**
     * @return mixed
     */
    public function getByUserId($id)
    {
        return $this->fetchAll("user_id= '$id' and active = 1 ");
    }

}