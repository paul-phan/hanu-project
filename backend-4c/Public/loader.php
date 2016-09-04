<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

if (PHP_VERSION < 5.3) {
    echo "Please update your PHP before use";
    exit();
}

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';
    // Xử lý string, thay DIRECTORY_SEPARATOR(/) thành (\)
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
// bắt đầu require file cần thiết
    require str_replace('Public/index.php', $fileName, $_SERVER['SCRIPT_FILENAME']);

}

spl_autoload_register('autoload');
//Gọi vào file Setting.php để lấy các thông số DEFINED
$Settings = new Application\Configs\Settings();
$Settings->getVariables();
//Tạo kết nối với CSDL
$connection = new Library\Core\Connection();
$connection->connectDb();

//nếu vào trang admin -> chuyển đến AdminRouter
if ($_GET['end'] == 'admin') {
    $AdminRouter = new Administration\Router\AdminRouter();
    $AdminRouter->dispatchPage($url);
} else {
    //trang thông thường -> chuyển đến AppRouter
    $AppRouter = new Application\Router\AppRouter();
    $AppRouter->dispatchPage($url);
}