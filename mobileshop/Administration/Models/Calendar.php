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

    public function addCalendar($post)
    {
        return $this->insert([
            "title" => $post['title'],
            "start" => isset($post['start']) ? date("Y-m-d H:i:s", strtotime($post['start'])) : date("Y-m-d H:i:s"),
            "end" => isset($post['end']) ? date("Y-m-d H:i:s", strtotime($post['end'])) : date("Y-m-d H:i:s", strtotime($post['start']) + 86400),
            "backgroundColor" => isset($post['backgroundColor']) ? $post['backgroundColor'] : array_rand(["black" => 5, "red" => 1, "green" => 2, "blue" => 3, "yellow" => 4]),
            "allDay" => isset($post['allDay']) ? 1 : 0,
            "url" => !empty($post['url']) ? $post['url'] : "#",
            "user_id" => $_SESSION['User']['id']
        ]);
    }

    public function editCalendar($post, $id)
    {
        return $this->update([
            "title" => $post['title'],
            "start" => date("Y-m-d H:i:s", strtotime($post['start'])),
            "end" => date("Y-m-d H:i:s", strtotime($post['end'])),
            "backgroundColor" => isset($post['backgroundColor']) ? $post['backgroundColor'] : array_rand(["black" => 5, "red" => 1, "green" => 2, "blue" => 3, "yellow" => 4]),
            "allDay" => isset($post['allDay']) ? 1 : 0,
            "url" => !empty($post['url']) ? $post['url'] : "#",
            "user_id" => $_SESSION['User']['id']
        ], "id = $id");
    }
}