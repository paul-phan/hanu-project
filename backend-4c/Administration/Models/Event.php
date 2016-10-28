<?php
/***
 * A mini PHP framework designed with MVC pattern providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 * Created by PhpStorm.
 * User: MyPC
 * Date: 21/09/2016
 * Time: 2:15 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;
use Library\Core\EventModel;

class Event extends MainModel implements EventModel
{
    protected $table = 'event';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertEvent($post)
    {
        return $this->insert(array(
            'title' => isset($post['title']) ? $post['title'] : '',
            'params' => $this->slugify(date("Y-m-d H:i:s") . '-' . $post['title']),
            'description' => isset($post['description']) ? $post['description'] : '',
            'address' => isset($post['address']) ? $post['address'] : '',
            'zipcode' => isset($post['zipcode']) ? $post['zipcode'] : '',
            'city' => isset($post['city']) ? $post['city'] : '',
            'schedule' => isset($post['schedule']) ? $post['schedule'] : '',
            'date_start' => isset($post['date_start']) ? $post['date_start'] : '',
            'date_end' => isset($post['date_start']) ? $post['date_end'] : '',
            'ticket' => isset($post['ticket']) ? $post['ticket'] : '',
            'price' => isset($post['price']) ? $post['price'] : '',
//            'updated' => date("Y:m:d H:i:s") //no need updated because update is timestamp
        ));
    }

    public function modifyEvent($post, $id)
    {
        // TODO: Implement modifyevent() method.
        return $this->update(array(
            'title' => isset($post['title']) ? $post['title'] : '',
            'description' => isset($post['description']) ? $post['description'] : '',
            'address' => isset($post['address']) ? $post['address'] : '',
            'zipcode' => isset($post['zipcode']) ? $post['zipcode'] : '',
            'city' => isset($post['city']) ? $post['city'] : '',
            'schedule' => isset($post['schedule']) ? $post['schedule'] : '',
            'date_start' => isset($post['date_start']) ? $post['date_start'] : '',
            'date_end' => isset($post['date_start']) ? $post['date_end'] : '',
            'ticket' => isset($post['ticket']) ? $post['ticket'] : '',
            'price' => isset($post['price']) ? $post['price'] : '',
//            'updated' => date("Y:m:d H:i:s") //no need updated because update is timestamp
        ), " id = '$id' ");
    }

    public function conStructSQL($value)
    {
        $sql = "SELECT title FROM event
        WHERE title LIKE '%$value%'";
        return $sql;
    }

}