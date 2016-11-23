<?php
/**
 * Created by PhpStorm.
 * User: ntdha
 * Date: 11/21/2016
 * Time: 6:03 PM
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;
use Library\Core\PhanHoiModel;

class PhanHoi extends MainModel implements PhanHoiModel
{
    protected $table = 'comment';
    protected $table2 = 'reply';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertPhanHoi($post)
    {
        return $this->themData(array(
            'name' => isset($_SESSION['User']['username']) ? $_SESSION['User']['username'] : '',
            'content' => isset($post['message']) ? $post['message'] : '',
            'date' => date("Y-m-d H:i:s"),
            'comment_id' => isset($post['comment_id']) ? $post['comment_id'] : '',
        ));
    }

    public function conStructSQL($value)
    {
        $sql = "SELECT title FROM comment
        WHERE title LIKE '%$value%'";
        return $sql;
    }

}