<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Application\Configs;

use DateTime;

class Settings
{
    public function __construct()
    {
        $admin_root = str_replace('Public/index.php', 'Administration/', $_SERVER['SCRIPT_FILENAME']);
        $app_root = str_replace('Public/index.php', 'Application/', $_SERVER['SCRIPT_FILENAME']);
        $api_root = str_replace('Public/index.php', 'Api/', $_SERVER['SCRIPT_FILENAME']);
        $lib_root = str_replace('Public/index.php', 'Library/', $_SERVER['SCRIPT_FILENAME']);
        $web_root = str_replace('Public/index.php', '', $_SERVER['SCRIPT_FILENAME']);
        $upload_root = str_replace('Public/index.php', 'Public/upload/', $_SERVER['SCRIPT_FILENAME']);

        //offset timezone if in other religion
//        $now = new DateTime();
//        $mins = $now->getOffset() / 60;
//        $sgn = ($mins < 0 ? -1 : 1);
//        $mins = abs($mins);
//        $hrs = floor($mins / 60);
//        $mins -= $hrs * 60;
//        $offset = sprintf('%+d:%02d', $hrs * $sgn, $mins);
        //        define('OFFSET', $offset);

//        General constance
        define('ADMIN_ROOT', $admin_root);
        define('APP_ROOT', $app_root);
        define('API_ROOT', $api_root);
        define('LIB_ROOT', $lib_root);
        define('LINK_ROOT', '/');
        define('WEB_ROOT', $web_root);
        define('HOST_ROOT', 'http://' . $_SERVER['HTTP_HOST']);
        define('UPLOAD_ROOT', $upload_root);
        define('UPLOAD_DIR', 'http://' . $_SERVER['HTTP_HOST'] . '/Public/upload/');


//        Database Configure
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'at_mobile');
        define('DB_USER', 'root');
        define('DB_PASSWORD', '');
        define('DB_CHARSET', 'utf8');

        define('TIMEZONE', 'Asia/Ho_Chi_Minh');

    }

    public function getVariables()
    {
// Recovery url and explode it to array
        $urlTmp = explode('/', $_GET['page']);
// If the controller and action are not defined,  initialize on the "index"
        $_GET['controller'] = (!empty($urlTmp[0])) ? $urlTmp[0] : 'index';
        $_GET['action'] = (!empty($urlTmp[1])) ? $urlTmp[1] : 'index';

        // If the controller is informed and if also the action is, it removes them from the table to complete the on values
        (!empty($urlTmp[0])) ? array_splice($urlTmp, 0, 2) : '';

        // If after removing the controller and action of the chain, there is something there above loop to create the
        // variables $_GET['params'];
        if (count($urlTmp) > 0) :
            $i = 0;
            foreach ($urlTmp as $get) :
                $_GET['params' . (($i == 0) ? '' : $i)] = $get;
                $i++;
            endforeach;
        else:
            $_GET['params'] = null;
        endif;
    }
}
