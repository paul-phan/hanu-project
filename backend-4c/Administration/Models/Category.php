<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 13/09/2016
 * Time: 11:55 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;

class Category extends MainModel
{
    protected $table = 'category';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertCategory($post)
    {
        return $this->insert(array(
            'cat_name' => $post['cat_name'],
            'params' => $this->slugify(date("Y-m-d H:i:s") . '-' . $post['cat_name']),
            'position' => !empty($post['position']) ? $post['position'] : 0,
            'group_name' => 'unordered',
            'active' => 1,
            'created' => date("Y-m-d H:i:s")
        ));
    }

    public function updateCategory($post, $id)
    {
        return $this->update(array(
            'cat_name' => $post['cat_name'],
            'position' => !empty($post['position']) ? $post['position'] : 0,
            'params' => $this->slugify($post['params']),
            'group_name' => isset($post['group_name']) ? $post['group_name'] : 'unordered',
            'active' => !empty($post['active']) ? 1 : 0,
        ), " id = '$id' ");
    }
}