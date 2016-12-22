<?php
/***
 * A mini PHP framework designed with MVC pattern providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 * Created by PhpStorm.
 * User: MyPC
 * Date: 13/09/2016
 * Time: 11:55 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;

class ProductDetail extends MainModel
{
    protected $table = 'product_detail';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertProDetail($post, $product_id)
    {
        return $this->insert([
            'product_id' => $product_id,
            'length' => isset($post['length']) ? $post['length'] : '',
            'width' => isset($post['width']) ? $post['width'] : '',
            'height' => isset($post['height']) ? $post['height'] : '',
            'weight' => isset($post['weight']) ? $post['weight'] : '',
            'screen_type' => isset($post['screen_type']) ? $post['screen_type'] : '',
            'screen_resolution' => isset($post['screen_resolution']) ? $post['screen_resolution'] : '',
            'screen_des' => isset($post['screen_des']) ? $post['screen_des'] : '',
            'memory_int' => isset($post['memory_int']) ? $post['memory_int'] : '',
            'memory_ext' => isset($post['memory_ext']) ? $post['memory_ext'] : '',
            'memory_sup' => isset($post['memory_sup']) ? $post['memory_sup'] : '',
            'bandwidth' => isset($post['bandwidth']) ? $post['bandwidth'] : '',
            'gps_type' => isset($post['gps_type']) ? $post['gps_type'] : '',
            'bluetooth' => isset($post['bluetooth']) ? $post['bluetooth'] : '',
            'wifi' => isset($post['wifi']) ? $post['wifi'] : '',
            'infrared' => isset($post['infrared']) ? $post['infrared'] : '',
            'usb' => isset($post['usb']) ? $post['usb'] : '',
            'main_camera' => isset($post['main_camera']) ? $post['main_camera'] : '',
            'front_camera' => isset($post['front_camera']) ? $post['front_camera'] : '',
            'sim_support' => isset($post['sim_support']) ? $post['sim_support'] : '',
            'os' => isset($post['os']) ? $post['os'] : '',
            'cpu' => isset($post['cpu']) ? $post['cpu'] : '',
            'ram' => isset($post['ram']) ? $post['ram'] : '',
            'battery' => isset($post['battery']) ? $post['battery'] : '',
            'accessory' => isset($post['accessory']) ? $post['accessory'] : ''
        ]);
    }

    public function updateProDetail($post, $product_id)
    {
        return $this->update([
            'length' => isset($post['length']) ? $post['length'] : '',
            'width' => isset($post['width']) ? $post['width'] : '',
            'height' => isset($post['height']) ? $post['height'] : '',
            'weight' => isset($post['weight']) ? $post['weight'] : '',
            'screen_type' => isset($post['screen_type']) ? $post['screen_type'] : '',
            'screen_resolution' => isset($post['screen_resolution']) ? $post['screen_resolution'] : '',
            'screen_des' => isset($post['screen_des']) ? $post['screen_des'] : '',
            'memory_int' => isset($post['memory_int']) ? $post['memory_int'] : '',
            'memory_ext' => isset($post['memory_ext']) ? $post['memory_ext'] : '',
            'memory_sup' => isset($post['memory_sup']) ? $post['memory_sup'] : '',
            'bandwidth' => isset($post['bandwidth']) ? $post['bandwidth'] : '',
            'gps_type' => isset($post['gps_type']) ? $post['gps_type'] : '',
            'bluetooth' => isset($post['bluetooth']) ? $post['bluetooth'] : '',
            'wifi' => isset($post['wifi']) ? $post['wifi'] : '',
            'infrared' => isset($post['infrared']) ? $post['infrared'] : '',
            'usb' => isset($post['usb']) ? $post['usb'] : '',
            'main_camera' => isset($post['main_camera']) ? $post['main_camera'] : '',
            'front_camera' => isset($post['front_camera']) ? $post['front_camera'] : '',
            'sim_support' => isset($post['sim_support']) ? $post['sim_support'] : '',
            'os' => isset($post['os']) ? $post['os'] : '',
            'cpu' => isset($post['cpu']) ? $post['cpu'] : '',
            'ram' => isset($post['ram']) ? $post['ram'] : '',
            'battery' => isset($post['battery']) ? $post['battery'] : '',
            'accessory' => isset($post['accessory']) ? $post['accessory'] : ''
        ], " product_id = $product_id ");
    }
}