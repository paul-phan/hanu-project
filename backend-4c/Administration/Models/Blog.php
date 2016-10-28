<?php
/**
 * Created by PhpStorm.
 * User: ntdha
 * Date: 10/28/2016
 * Time: 5:04 PM
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;
use Library\Core\BlogModel;

class Blog extends MainModel implements BlogModel
{
    protected $table = 'blog';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertBlog($post)
    {
        return $this->insert(array(
            'title' => isset($post['title']) ? $post['title'] : '',
            'params' => $this->slugify(date("Y-m-d H:i:s") . '-' . $post['title']),
            'body' => isset($post['body']) ? $post['body'] : '',
            'created' => isset($post['created']) ? $post['created'] : date("Y-m-d H:i:s")
        ));
    }

    public function modifyBlog($post, $id)
    {
        return $this->update(array(
            'title' => isset($post['title']) ? $post['title'] : '',
            'params' => $this->slugify(date("Y-m-d H:i:s") . '-' . $post['title']),
            'body' => isset($post['body']) ? $post['body'] : '',
            'created' => isset($post['created']) ? $post['created'] : date("Y-m-d H:i:s")
        ), " id = '$id' ");
    }

    public function conStructSQL($value)
    {
        $sql = "SELECT title FROM blog
        WHERE title LIKE '%$value%'";
        return $sql;
    }

}