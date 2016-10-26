<?php
/**
 * Created by PhpStorm.
 * User: ntdha
 * Date: 10/25/2016
 * Time: 9:06 PM
 */
namespace Application\Models;

use Library\Core\Model as MainModel;
use Library\Core\FeedbackModel;

class Feedback extends MainModel implements FeedbackModel
{
    protected $table = 'feedback';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertFeedback($post)
    {
        return $this->insert(array(
            'product_id' => isset($post['title']) ? $post['title'] : '',
            'title' => isset($post['title']) ? $post['title'] : '',
            'content' => isset($post['content']) ? $post['content'] : '',
            'date' => date("Y-m-d H:i:s"),
            'email' => isset($post['email']) ? $post['email'] : '',
            'name' => isset($post['name']) ? $post['name'] : ''
        ));
    }
}