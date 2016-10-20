<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Api\Controllers;

use Library\Core\Controller as MainController;

abstract class ApiController extends MainController
{
    protected $src_root = API_ROOT;
    protected $src_link = 'Api\Controllers\\';
    protected $api_error = array(
        100001 => 'invalid token or user id',
        100002 => 'invalid params',
        100004 => 'duplicate username',
        100003 => 'lack of params',
        110001 => 'Invalid data',
        110002 => 'Save data fail',
        110003 => 'No data found!',
        120000 => 'Upload image error',
        130000 => 'abc',
        130001 => 'def',
        130002 => 'item not found',
    );

    function __construct()
    {
        parent::__construct();
    }

    private function setHeader($code)
    {
        http_response_code($code);
    }

    protected function responseApi($code = 0, $message = '', $data = array(), $header_type = 'json')
    {
        if ($header_type == 'json') {
            header('Content-Type: application/json; charset=UTF-8');
        } else {
            header('Content-Type: text/html; charset=UTF-8');
        }


        if ($code == 0) {
            $this->setHeader(200);
            echo json_encode(array(
                    'code' => $code,
                    'message' => $message,
                    'data' => $data
                )
            );
        } else {
            $this->setHeader(400);
            if (!$message) {
                $message = isset($this->api_error[$code]) ? $this->api_error[$code] : 'Unexpected error!';
            }
            echo json_encode(array(
                    'code' => $code,
                    'message' => $message,
                    'data' => $data
                )
            );
        }
        die;
    }
}