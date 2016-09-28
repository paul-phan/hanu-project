<?php
/**
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
}