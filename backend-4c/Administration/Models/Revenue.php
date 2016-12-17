<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/11/2016
 * Time: 10:48 AM
 */

namespace Administration\Models;

use Library\Core\Model as MainModel;

class Revenue extends MainModel
{
    public function __construct($co)
    {
        parent::__construct($co);
    }
    /**
     *      The year can be evenly divided by 4;
            If the year can be evenly divided by 100, it is NOT a leap year, unless;
            The year is also evenly divisible by 400. Then it is a leap year.
     */
    private function isLeapYear($year){
        return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)));
    }

    /** calculate total revenue of a specific month from within January to December of the current year
     * @param $month
     * @return array
     */
    public function revenue($month)
    {
        if(1<=$month&&$month<=12) {
            $now = time();
            $nowYear = date('Y', $now);
            switch ($month) {
                case 1:
                    $startInterval = $nowYear + '-01-01';
                    $endInterval = $nowYear + '-01-31';
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                case 2:
                    $startInterval = '';
                    $endInterval = '';
                    if ($this->isLeapYear($nowYear)) {
                        $startInterval = $nowYear + '-02-01';
                        $endInterval = $nowYear + '-02-29';
                    } else {
                        $startInterval = $nowYear + '-02-01';
                        $endInterval = $nowYear + '-02-28';
                    }
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                case 3:
                    $startInterval = $nowYear + '-03-01';
                    $endInterval = $nowYear + '-03-31';
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                case 4:
                    $startInterval = $nowYear + '-04-01';
                    $endInterval = $nowYear + '-04-30';
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                case 5:
                    $startInterval = $nowYear + '-05-01';
                    $endInterval = $nowYear + '-05-31';
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                case 6:
                    $startInterval = $nowYear + '-06-01';
                    $endInterval = $nowYear + '-06-30';
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                case 7:
                    $startInterval = $nowYear + '-07-01';
                    $endInterval = $nowYear + '-07-31';
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                case 8:
                    $startInterval = $nowYear + '-08-01';
                    $endInterval = $nowYear + '-08-31';
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                case 9:
                    $startInterval = $nowYear + '-09-01';
                    $endInterval = $nowYear + '-09-30';
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                case 10:
                    $startInterval = $nowYear + '-10-01';
                    $endInterval = $nowYear + '-10-31';
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                case 11:
                    $startInterval = $nowYear + '-11-01';
                    $endInterval = $nowYear + '-11-30';
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                case 12:
                    $startInterval = $nowYear + '-12-01';
                    $endInterval = $nowYear + '-12-31';
                    $sql = "SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.id=5";
                    $rs = $this->fetchMatchedFields($sql);
                    return $rs;
                default :
                    break;
            }
        }
    }

}