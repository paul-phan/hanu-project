<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 21/09/2016
 * Time: 2:15 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;

class Product extends MainModel
{
    protected $table = 'product';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }


}