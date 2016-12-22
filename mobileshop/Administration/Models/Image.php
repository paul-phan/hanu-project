<?php
/***
 * A mini PHP framework designed with MVC pattern providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 * Created by PhpStorm.
 * User: MyPC
 * Date: 13/09/2016
 * Time: 11:55 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;

class Image extends MainModel
{
    protected $table = 'image';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertImage($post, $product_id)
    {
        return $this->insert(array(
            'product_id' => isset($post['product_id']) ? $post['product_id'] :  $product_id,
            'url' => $post['url'],
            'label' => isset($post['label']) ? $post['label'] : $post['url'],
            'base_image' => isset($post['base_image']) ? 1 : 0,
            'active' => isset($post['active']) ? 1 : 0,
            'created' => date("Y-m-d H:i:s"),
            'position' => isset($post['position']) ? $post['position'] : 0
        ));
    }

    public function updateImage($post, $id)
    {
        return $this->update(array(
            'label' => isset($post['label']) ? $post['label'] : $post['url'],
            'base_image' => isset($post['base_image']) ? 1 : 0,
            'active' => isset($post['active']) ? 1 : 0,
            'position' => isset($post['position']) ? $post['position'] : 0
        ), " id = $id ");
    }

}