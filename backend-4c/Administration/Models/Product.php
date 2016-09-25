<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 21/09/2016
 * Time: 2:15 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;
use Library\Core\ProductModel;

class Product extends MainModel implements ProductModel
{
    protected $table = 'product';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertProduct($post)
    {
        // TODO: Implement insertProduct() method.

    }

    public function modifyProduct($post, $id)
    {
        // TODO: Implement modifyProduct() method.
    }


}