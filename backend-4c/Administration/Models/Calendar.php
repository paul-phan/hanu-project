<?php
/**
 * Created by PhpStorm.
 * User: gangstar
 * Date: 19/12/2016
 * Time: 10:29
 */

namespace Administration\Models;


use Library\Core\Model;

class Calendar extends Model
{
    protected $table = 'calendar';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }
}