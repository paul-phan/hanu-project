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

use Application\Controllers\AppController as MainController;

use Library\Tools;

class Blog extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        header("Refresh:1; url=blog/list", true, 200);
    }

    public function topicAction(){
        global $connection;
        $co = $connection->getCo();
        $blogModel = new \Administration\Models\Blog($co);
        $result = $blogModel->fetchAll2();
        $this->addDataView(array(
            'viewTitle' => 'Chủ đề',
            'viewSiteName' => 'Danh sách chủ đề',
            'topics' => $result
        ));
    }

    public function viewAction()
    {
        Tools\Helper::checkUrlParamsIsNumeric();
        $id = $_GET['params'];
        global $connection;
        $co = $connection->getCo();
        $blogModel = new \Administration\Models\blog($co);
        $blog = $blogModel->findById($id);

        $this->addDataView(array(
            'viewTitle' => 'Chi tiết bài viết',
            'viewSiteName' => 'Bài viết',
            'blog' => $blog[0],
        ));
    }

    public function listAction() {
        Tools\Helper::checkUrlParamsIsNumeric();
        $id = $_GET['params'];
        global $connection;
        $co = $connection->getCo();
        $blogModel = new \Administration\Models\blog($co);
        $blog = $blogModel->findById2($id);
        $this->addDataView(array(
            'viewTitle' => 'Chi tiết bài viết',
            'viewSiteName' => 'Bài viết',
            'blogs' => $blog,
        ));
    }
}