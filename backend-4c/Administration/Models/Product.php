<?php

namespace Administration\Models;

use Library\Core\Model as MainModel;

class Product extends MainModel{
    protected $table = 'product';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function getList(){

    }
}