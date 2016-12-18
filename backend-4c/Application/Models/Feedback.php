<?php
/**
 * Created by PhpStorm.
 * User: ntdha
 * Date: 11/22/2016
 * Time: 6:24 PM
 */
namespace Application\Models;

use Library\Core\Model as MainModel;
use Library\Core\FeedbackModel;

class Feedback extends MainModel implements FeedbackModel
{
    protected $table = 'comment';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertFeedback($post)
    {
        return $this->insert(array(
            'name' => isset($post['name']) ? $post['name'] : '',
            'message' => isset($post['message']) ? $post['message'] : '',
            'email' => isset($post['email']) ? $post['email'] : '',
            'date' => date("Y-m-d H:i:s"),
            'product_id' => isset($post['product_id']) ? $post['product_id'] : '',
        ));
    }

    public function displayComment(){
        $giaTri=$_SESSION['product_id'];
        return $a=$this->fetchMatchedFields("SELECT cm.id, cm.name, cm.message, cm.email, cm.date, r.name, r.content, r.ngay
                                  FROM comment as cm JOIN reply as r ON cm.id=r.comment_id WHERE cm.product_id=$giaTri");
    }
}