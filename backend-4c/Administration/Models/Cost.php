<?php
/**
 * Created by PhpStorm.
 * User: ntdha
 * Date: 11/23/2016
 * Time: 1:43 AM
 */
namespace Administration\Models;
use Library\Core\Model as MainModel;

class Cost extends MainModel
{
    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function costAction($startInterval, $endInterval){

        $sql="SELECT SUM(order_product.total_price) FROM `order_product` INNER JOIN order_status ON order_product.id=order_status.id WHERE order_product.updated BETWEEN '$startInterval' AND '$endInterval' AND order_status.name=\"Vừa đặt\"" ;
        $rs=$this->fetchMatchedFields($sql);
        return $rs;
    }

}