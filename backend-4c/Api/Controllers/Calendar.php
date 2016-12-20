<?php
/**
 * Created by PhpStorm.
 * User: gangstar
 * Date: 19/12/2016
 * Time: 10:30
 */

namespace Api\Controllers;


class Calendar extends ApiController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        global $connection;
        $co = $connection->getCo();
        $calendarModel = new \Administration\Models\Calendar($co);
        $calendars = $calendarModel->fetchAll();
        if (!empty($calendars[0])) {
            $this->responseApi(0, "", $calendars);
        }
        $this->responseApi(110003);
    }

    public function addAction()
    {
        global $connection;
        $co = $connection->getCo();
        $calendarModel = new  \Administration\Models\Calendar($co);
        if ($_POST) {
            if (isset($_POST['title']) && isset($_POST['start'])) {
                if ($calendarModel->addCalendar($_POST)) {
                    $this->responseApi(0, "new event added to calendar", []);
                } else {
                    $this->responseApi(110002);
                }
            }
            $this->responseApi(110001);
        }
        $this->responseApi(100003);
    }
}