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
    /**select a result set the is between $startIterval and $endInterval(UNIX timestamp)
     * return total price
     * @param $startInterval
     * @param $endInterval
     */
    public function Revenue($startInterval,$endInterval){

        $sql="SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.name=\"Gửi thành công\"" ;
        $rs=$this->fetchMatchedFields($sql);
        return $rs;
    }

}