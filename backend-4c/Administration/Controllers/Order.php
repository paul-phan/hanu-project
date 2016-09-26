<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 * Date: 15/09/2016
 * Time: 5:45 CH
 */

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools;

class Order extends MainController
{
    public function indexAction()
    {
        header("Refresh:1; url=/admin/order/list", true, 303);
    }

    public function listAction()
    {
        global $connection;
        $co = $connection->getCo();
        $orderModel = new \Administration\Models\Order($co);
        $orders = $orderModel->fetchByClause(' join profile on profile.id = order_product.profile_id join product on product.id = order_product.product_id where 1 order by updated desc ', ' order_product.*, product.title , profile.full_name, profile.address, profile.city, profile.country, profile.phone, profile.email ');
        $this->addDataView(array(
            'viewTitle' => 'Đơn hàng',
            'viewSiteName' => 'Danh sách',
            'orders' => $orders
        ));
    }

    public function addAction()
    {
        global $connection;
        $co = $connection->getCo();
        $orderModel = new \Administration\Models\Order($co);
        $productModel = new \Administration\Models\Product($co);
        $profileModel = new \Administration\Models\Profile($co);
        $products = $productModel->fetchAll();
        $profiles = $profileModel->fetchAll();
        if ($_POST) {
            $productSelected = $productModel->findById($_POST['product_id']);
            $_POST['to_price'] = (isset($productSelected[0]->sale) ? $productSelected[0]->sale : $productSelected[0]->price);
            if (empty($_POST['item_count']) || empty($_POST['profile_id']) || empty($_POST['product_id'])) {
                $alert = Tools\Alert::render('Vui lòng nhập đầy đủ thông tin', 'warning');
            } else {
                if ($orderModel->addOrder($_POST)) {
                    $alert = Tools\Alert::render('Đặt hàng thành công, đang trở lại danh sách...!', 'success');
                    header("Refresh:3; url=/admin/order/list", true, 303);
                } else {
                    $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại!', 'danger');
                }
            }
        }
        $this->addDataView(array(
                'viewTitle' => 'Đơn hàng',
                'viewSiteName' => 'Xem đơn hàng',
                'products' => $products,
                'profiles' => $profiles,
                'form' => $_POST,
                'alert' => isset($alert) ? $alert : ''
            )
        );
    }
}