<?php
/**
 * Created by PhpStorm.
 * User: PhanMinh
 * Date: 13/09/2016
 * Time: 11:55 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;

class Order extends MainModel
{
    protected $table = 'order_product';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function addOrder($post)
    {
        return $this->insert(array(
            'profile_id' => $post['profile_id'],
            'product_id' => $post['product_id'],
            'item_count' => $post['item_count'],
            'to_price' => $post['to_price'],
            'ship_price' => $post['ship_price'],
            'total_price' => intval(intval($post['to_price']) * intval($post['item_count']) + intval($post['ship_price'])),
            'order_type' => isset($post['order_type']) ? $post['order_type'] : 'normal',
            'description' => $post['description'],
            'ip_address' => $this->get_client_ip(),
            'created' => date("Y:m:d H:i:s"),
            'status' => 1
        ));
    }

    public function editOrder($post, $id)
    {
        return $this->update(array(
            'product_id' => $post['product_id'],
            'item_count' => $post['item_count'],
            'to_price' => $post['to_price'],
            'ship_price' => $post['ship_price'],
            'total_price' => intval(intval($post['to_price']) * intval($post['item_count']) + intval($post['ship_price'])),
            'order_type' => isset($post['order_type']) ? $post['order_type'] : 'normal',
            'description' => $post['description'],
            'ip_address' => $this->get_client_ip(),
            'created' => date("Y:m:d H:i:s"),
            'status' => intval($post['status'])
        ), ' id = ' . $id);
    }

    private function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}