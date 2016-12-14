<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 14/12/2016
 * Time: 4:39 SA
 */

namespace Api\Controllers;

use Library\Tools;

class Blog extends ApiController
{
    //get all blog
    public function indexAction()
    {
        global $connection;
        $co = $connection->getCo();
        $blogModel = new \Administration\Models\Blog($co);
        $result = $blogModel->fetchAll();
        $this->responseApi(0, 'result', $result);
    }

    public function getAction()
    {
        global $connection;
        $co = $connection->getCo();
        $blogModel = new \Administration\Models\Blog($co);
        if (!empty($_GET['params']) && is_numeric($_GET['params'])) {
            $result = $blogModel->findById($_GET['params']);
            $this->responseApi(0, 'result', $result[0]);
        } else if (!empty($_GET['keyword'])) {
            $k = $_GET['keyword'];
            $result = $blogModel->fetchAll("title LIKE '%$k%' OR tags LIKE '%$k%'");
            if (!empty($result)) {
                $this->responseApi(0, 'result', $result);
            } else {
                $this->responseApi(404, 'not found');
            };
        }
        $this->responseApi(100003);
    }

    public function addAction()
    {
        if (!isset($_SESSION['User']['id'])) {
            $this->responseApi(100001, 'Please login to do this action! ');
        }
        global $connection;
        $co = $connection->getCo();
        $blogModel = new \Administration\Models\Blog($co);
//        $this->responseApi(0,'asd', $_POST);
        if ($_POST) {
            if ($_FILES) {
                $image = $_FILES['image'];
                $upload = new Tools\Upload();
                $name = $upload->copy(array(
                    'file' => $image,
                    'path' => 'blog/',
                    'name' => $blogModel->slugify(time() . '-' . $_POST['title'])
                ));
            }

            $_POST['image'] = isset($name) ? $name : 'updatelater.jpg';
            if (!empty($_POST['title']) && !empty($_POST['body'])) {
                if ($blogModel->insertBlog($_POST)) {
                    $this->responseApi(0, 'add new post successfully', $_POST);
                } else {
                    $this->responseApi(110002);
                }
            } else {
                $this->responseApi(11111,'invalid data', $_POST);
            }
        }
        $this->responseApi(100003);
    }

    public function editAction()
    {
        $this->responseApi(0, 'sadas', $_POST);
    }
}