<?php

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;

use Library\Tools;
class Contact extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        global $connection;
        $co = $connection->getCo();
        $ContactModel = new \Application\Models\Contact($co);

        if($_POST){
            if (!empty($_POST['title']) && !empty($_POST['message']) && !empty($_POST['name']) && !empty($_POST['email'])) {
                if ($ContactModel->insertContact($_POST)) {

                    $alert = Tools\Alert::render('Đã gửi liên lạc tới admin...!');
                    header("Refresh:3; url=index", true, 303);
                } else {
                    $alert = Tools\Alert::render('Không thành công, vui lòng thử lại...!');
                }
            } else {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin...!');
            }
        }

        $this->addDataView(array(
            'viewTitle' => 'AT - Mobile',
            'viewSiteName' => 'Liên hệ',
            'form' => $_POST,
            'alert' => isset($alert) ? $alert : ''
        ));
    }

}