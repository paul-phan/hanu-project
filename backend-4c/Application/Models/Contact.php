<?php
/**
 * Created by PhpStorm.
 * User: ntdha
 * Date: 10/25/2016
 * Time: 9:06 PM
 */
namespace Application\Models;

use Library\Core\Model as MainModel;
use Library\Core\ContactModel;

class Contact extends MainModel implements ContactModel
{
    protected $table = 'contact';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertContact($post)
    {
        return $this->insert(array(
            'title' => isset($post['title']) ? $post['title'] : '',
            'message' => isset($post['message']) ? $post['message'] : '',
            'email' => isset($post['email']) ? $post['email'] : '',
            'date' => date("Y:m:d H:i:s")
        ));
    }
}