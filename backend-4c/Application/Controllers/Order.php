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

class Order extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        $products = [];
        $total = 0;
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart']) : [];
        foreach ($cart as $k => $v) {
            $product = $productModel->fetchByClause("  join company on company.id = product.company_id  left join image on image.product_id = product.id and image.base_image = 1 where product.id = $v->id ", "  product.*, company.com_name as cname, image.url as iurl, image.label as ilabel ")[0];
            $product->quantity = $v->count;
            $products[] = $product;
            $total += $v->count * (($product->sale > 0) ? $product->sale : $product->price);
        }

        $this->addDataView([
            'viewTitle' => 'Giỏ hàng',
            'viewSiteName' => 'Danh sách',
            'products' => $products,
            'total' => $total
        ]);
    }

    public function update_cartAction()
    {
        $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
        if ($_GET['params'] != '') {
            $id = $_GET['params'];
            foreach ($cart as $k => $v) {
                if ($v['id'] == $id) {
                    unset($cart[$k]);
                }
            }
        }
        if ($_POST) {
            if (!empty($_POST['update_cart'])) {
                foreach ($cart as $kc => $vc) {
                    foreach ($_POST as $kp => $vp) {
                        if (is_numeric($kp) && $kp == $vc['id']) {
                            $cart[$kc]['count'] = $vp;
                            if ($vp == 0) {
                                unset($cart[$kc]);
                            }
                        }
                    }
                }
            }
            if (!empty($_POST['use_coupon']) && !empty($_POST['coupon'])) {
                $_SESSION['coupon'] = $_POST['coupon'];
            }
        }
        setcookie("cart", json_encode($cart), time() + (86400 * 30), '/');
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }

    public function checkoutAction()
    {

        $products = [];
        $total = 0;
        global $connection;
        $co = $connection->getCo();
        $orderModel = new \Administration\Models\Order($co);
        $userModel = new \Administration\Models\User($co);
        $profileModel = new \Administration\Models\Profile($co);
        $productModel = new \Administration\Models\Product($co);
        $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart']) : [];
        foreach ($cart as $k => $v) {
            $product = $productModel->fetchByClause("  join company on company.id = product.company_id  left join image on image.product_id = product.id and image.base_image = 1 where product.id = $v->id ", "  product.*, company.com_name as cname, image.url as iurl, image.label as ilabel ")[0];
            $product->quantity = $v->count;
            $products[] = $product;
            $total += $v->count * (($product->sale > 0) ? $product->sale : $product->price);
        }
        //get user data
        if (!empty($_SESSION['User']['id'])) {
            $id = $_SESSION['User']['id'];
            $user = $userModel->findById($id);
            $profile = $profileModel->getByUserId($id);
        }

        //ordering
        if ($_POST) {
            if (!empty($_POST['submit_order']) && !empty($_POST['product_id'])) {

                foreach ($_POST['product_id'] as $k => $pid) {
                    $_POST['order']['product_id'] = $pid;
                    $_POST['order']['item_count'] = $_POST['product_quantity'][$k];
                    $_POST['order']['to_price'] = $_POST['product_price'][$k];
                    $_POST['order']['ship_price'] = 0;
//                    var_dump($_POST['order']);
                    if ($orderModel->addOrder($_POST['order'])) {
                        $alert = Tools\Alert::render('Chúc mừng, bạn đã đặt hàng thành công!', 'success');
                        setcookie("cart", "", 1, '/');
                        header("Refresh:3; url=/", true, 303);
                    } else {
                        $alert = Tools\Alert::render('Xảy ra lỗi, vui lòng thử lại :(', 'danger');
                    }
                }
            }


        }

        $this->addDataView([
            'viewTitle' => 'Giỏ hàng',
            'viewSiteName' => 'Checkout!',
            'products' => $products,
            'total' => $total,
            'user' => !empty($user[0]) ? $user[0] : '',
            'profile' => !empty($profile[0]) ? $profile[0] : '',
            'alert' => !empty($alert) ? $alert : ''
        ]);
    }

}