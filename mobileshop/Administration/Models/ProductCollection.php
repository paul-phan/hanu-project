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

class ProductCollection extends MainModel
{
    protected $table = 'product_collection';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertCollection($product_id, $category_id)
    {
        return $this->insert(array(
            'product_id' => $product_id,
            'category_id' => $category_id
        ));
    }

    public function getCollectionByProductId($product_id)
    {
        return $this->fetchAll(" product_id = '$product_id' ");
    }

    public function updateCollection($product_id, $category_id)
    {
        if ($this->deleteCollectionByProductId($product_id)) {
            return $this->insertCollection($product_id, $category_id);
        } else {
            return false;
        }
    }

    private function deleteCollectionByProductId($id)
    {
        return $this->massDelete(" product_id = '$id' ");
    }
}