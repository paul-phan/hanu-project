<?php
/**
 * Created by PhpStorm.
 * User: ntdha
 * Date: 10/25/2016
 * Time: 10:21 PM
 */
namespace Application\Controllers;

use Application\Controllers\AppController as MainController;
use Application\Models\Feedback as FeedbackModel;
use Library\Tools;

class Feedback extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addAction()
    {
        global $connection;
        $co = $connection->getCo();
        $FeedbackModel = new \Application\Models\Feedback($co);
        if ($_POST) {
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['email'])) {
                if ($FeedbackModel->insertFeedback($_POST)) {
                    $alert = Tools\Alert::render('Thêm feedback thành công, đang trở lại danh sách...!', 'success');
                   
                } else {
                    $alert = Tools\Alert::render('Không thành công, vui lòng thử lại...!', 'danger');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
            }
        }

        $this->addDataView(array(
            'viewTitle' => 'phản hồi',
            'viewSiteName' => 'Thêm phản hồi',
            'form' => $_POST,
            'alert' => isset($alert) ? $alert : ''
        ));
    }

    public function listAction()
    {
        echo 'updating...';
    }

}