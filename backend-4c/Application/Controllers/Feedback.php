<?php
/**
 * Created by PhpStorm.
 * User: ntdha
 * Date: 10/25/2016
 * Time: 10:21 PM
 */
namespace Application\Controllers;

use Application\Controllers\AppController as MainController;
use Library\Tools;

class Feedback extends MainController
{
    public $a;
    public function __construct()
    {
        parent::__construct();
        $this->a=isset($_SESSION['product_id']) ? $_SESSION['product_id'] : '';
    }

    public function indexAction(){
        header('Location: ../../Feedback/list');
    }

    public function addAction()
    {
        global $connection;
        $co = $connection->getCo();
        $FeedbackModel = new \Application\Models\Feedback($co);
        if(!empty($_SESSION['product_id']) && !empty($_SESSION['product_name'])) {
            if ($_POST) {
                if (!empty($_POST['name']) && !empty($_POST['message']) && !empty($_POST['email']) && !empty($_POST['product_id'])) {
                    if ($FeedbackModel->insertFeedback($_POST)) {
                        $alert = Tools\Alert::render('Thêm feedback thành công', 'success');
                        header("Refresh:3, url=list", true, 303);
                    } else {
                        $alert = Tools\Alert::render('Không thành công, vui lòng thử lại...!', 'danger');
                    }
                } else {
                    $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!', 'warning');
                }
            }

            $this->addDataView(array(
                'viewTitle' => 'Phản hồi',
                'viewSiteName' => 'Thêm phản hồi',
                'alert' => isset($alert) ? $alert : ''
            ));
        }else{
            header('Location: ../../index');
        }

    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $FeedbackModel = new \Application\Models\Feedback($co);
        $giaTri=$this->a;
        $result = $FeedbackModel->fetchMatchedFields("SELECT comment.id, comment.name, comment.message, comment.email, comment.date, comment.product_id, reply.content FROM comment JOIN reply ON reply.comment_id=comment_id WHERE comment.product_id='$giaTri'");
        $this->addDataView(array(
            'viewTitle' => 'Quản lý',
            'viewSiteName' => 'Phản hồi',
            'feedbacks' => $result,
        ));
    }

}