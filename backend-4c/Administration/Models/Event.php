<?php
/**
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
            'params' => $this->slugify(time() . '-' . $post['title']),
            'description' => isset($post['description']) ? $post['description'] : '',
            'address' => isset($post['address']) ? $post['address'] : '',
            'zipcode' => isset($post['zipcode']) ? $post['zipcode'] : '',
            'city' => isset($post['city']) ? $post['city'] : '',
            'schedule' => isset($post['schedule']) ? $post['schedule'] : '',
            'date_start' => isset($post['date_start']) ? $post['date_start'] : '',
            'date_end' => isset($post['date_start']) ? $post['date_end'] : '',
            'ticket' => isset($post['ticket']) ? $post['ticket'] : '',
            'price' => isset($post['price']) ? $post['price'] : '',
            'updated' => date("Y:m:d H:i:s")
        ));
    }

    public function modifyEvent($post, $id)
    {
        // TODO: Implement modifyevent() method.
        return $this->update(array(
            'company_id' => $post['company_id'],
            'title' => $post['title'],
            'count' => $post['count'],
            'price' => $post['price'],
            'detail' => $post['detail'],
            'sale' => $post['sale'],
            'active' => isset($post['active']) ? 1 : 0,
            'tags' => isset($post['tags']) ? $post['tags'] : 'no,tag',
            'event_year' => isset($post['event_year']) ? $post['event_year'] : ''
        ), " id = '$id' ");
    }

    public function conStructSQL($value)
    {
        $sql = "SELECT title FROM event
        WHERE title LIKE '%$value%'";
        return $sql;
    }

}