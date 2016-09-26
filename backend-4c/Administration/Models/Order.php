<?php
/**
 * Created by PhpStorm.
 * User: PhanMinh
 * Date: 13/09/2016
 * Time: 11:55 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;

class Order extends MainModel
{
    protected $table = 'order_product';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }
}