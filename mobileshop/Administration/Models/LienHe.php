<?php
/**
 * Created by PhpStorm.
 * User: ntdha
 * Date: 11/21/2016
 * Time: 6:03 PM
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;
use Library\Core\LienHeModel;

class LienHe extends MainModel implements LienHeModel
{
    protected $table = 'contact';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function conStructSQL($value)
    {
        $sql = "SELECT title FROM Lienhe
        WHERE title LIKE '%$value%'";
        return $sql;
    }

}