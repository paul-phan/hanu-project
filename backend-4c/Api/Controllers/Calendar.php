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
}