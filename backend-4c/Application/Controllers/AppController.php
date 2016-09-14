<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Application\Controllers;

use Library\Core\Controller as MainController;

class AppController extends MainController
{
    protected $src_root = APP_ROOT;
    protected $src_link = 'Application\\Controllers\\';
    protected $api_error = array(
        100001 => 'invalid token or user id',
        100002 => 'invalid params',
        100003 => 'lack of params',
        110001 => 'User Data invalid',
        110002 => 'Save data fail',
        120000 => 'Upload image error',
        130000 => 'abc',
        130001 => 'def',
    );

    function __construct()
    {
        parent::__construct();
    }

    function setHeader($code)
    {
        http_response_code($code);
    }

    function responseApi($code = 0, $message = '', $data = array(), $header_type = 'json')
    {
        if ($header_type == 'json')
        {
            header('Content-Type: application/json');
        }
        else
        {
            header('Content-Type: text/html');
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
                $message = isset($this->api_error[$code]) ? $this->api_error[$code] : '';
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