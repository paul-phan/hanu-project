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
}