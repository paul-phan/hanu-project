<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 13/09/2016
 * Time: 11:55 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;

class OrderStatus extends MainModel
{
    protected $table = 'order_status';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }
}