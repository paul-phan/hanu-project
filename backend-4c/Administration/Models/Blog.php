<?php
/**
 * A mini PHP framework designed with MVC pattern providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 * Created by PhpStorm.
 * User: MyPC
 * Date: 21/09/2016
 * Time: 2:15 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;

use Library\Core\BlogModel;

class Blog extends MainModel implements BlogModel
{
    protected $table = 'blog';
    protected $table2 = 'topic';
    protected $primary = 'id';
    protected $primary2 = 'topic_id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertBlog($post)
    {
        return $this->insert(array(
            'title' => isset($post['title']) ? $post['title'] : '',
            'params' => $this->slugify(date("Y-m-d H:i:s") . '-' . $post['title']),
            'tags' => !empty($post['tags']) ? $post['tags'] : 'no tag',
            'image' => $post['image'],
            'body' => isset($post['body']) ? $post['body'] : '',
            'user_id' => $_SESSION['User']['id'],
            'topic_id' => isset($post['topic_id']) ? $post['topic_id'] : '', // if add the topic, plz upload `topic` table to at_mobile.sql
            'created' => date("Y-m-d H:i:s")
        ));
    }

    public function modifyBlog($post, $id)
    {
        return $this->update(array(
            'title' => isset($post['title']) ? $post['title'] : '',
            'params' => $this->slugify(date("Y-m-d H:i:s") . '-' . $post['title']),
            'tags' => !empty($post['tags'] ? $post['tags'] : 'no tag'),
            'image' => $post['image'],
            'body' => isset($post['body']) ? $post['body'] : '',
            'user_id' => $_SESSION['User']['id'],
            'topic_id' => isset($post['topic_id']) ? $post['topic_id'] : '',
        ), " id = '$id' ");
    }
}