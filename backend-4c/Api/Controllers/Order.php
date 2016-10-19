<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 */
namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;
use Library\Tools;

class Order extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add_orderAction()
    {
        $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
        $pro = count($cart);
        $idExists = false;
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        if ($_POST) {
            if (!empty($_POST['product_id']) && is_numeric($_POST['count'])) {
                $product = $productModel->findById($_POST['product_id']);
                if (!empty($product) && isset($product)) {
                    if (isset($cart[$pro]['id'])) {
                        foreach ($cart as $k => $v) : // if this product already exists in card then just count++
                            if ($v['id'] == $_POST['product_id']) {
                                $cart[$pro]['count'] = !empty($_POST['count']) ? ($cart[$pro]['count'] + $_POST['count']) : '';
                                $idExists = true;
                                break;
                            }
                        endforeach;
                        if (!$idExists) { //if new product add to cart
                            $cart[$pro + 1]['id'] = $_POST['product_id'];
                            $cart[$pro + 1]['count'] = $_POST['count'];
                        }
                    } else { // very new product
                        $cart[$pro + 1]['id'] = $_POST['product_id'];
                        $cart[$pro + 1]['count'] = $_POST['count'];
                    }
                    setcookie("cart", json_encode($cart), time() + (86400 * 30), '/');
                    $this->responseApi(0, 'Add to cart successfully!', $cart);
                } else {
                    $this->responseApi(110001, 'Product dont exist!', $cart); //wrong data product_id (don't exists)
                }
            } else {
                $this->responseApi(100003, '', $cart); //dont have product_id
            }
        } else {
            $this->responseApi(100003, '', $cart); //check post data
        }
    }

    public function resetAction()
    {
        if (setcookie("cart", "", 1, '/')) {
            $this->responseApi(0, 'Your cart is empty now!', $_COOKIE);
        } else {
            $this->responseApi(12323);
        }
    }

}