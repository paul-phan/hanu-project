<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/11/2016
 * Time: 10:29 AM
 */

namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;

class Revenue extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        if (isset($_GET['month'])) {
            global $connection;
            $co = $connection->getCo();
            $revenueModel = new \Administration\Models\Revenue($co);
            $sum = $revenueModel->revenue($_GET['month']);
            if (!empty($sum)) {
                return $this->responseApi(0, "successful", $sum);
            } else {
                return $this->responseApi(110003);
            }
        } else {
            return $this->responseApi(100003);
        }
    }

}