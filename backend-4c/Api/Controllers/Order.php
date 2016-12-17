<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 */
namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;

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
                        foreach ($cart as $k => $v) { // if this product already exists in cart then just count++
                            if ($v['id'] == $_POST['product_id']) {
                                $cart[$k]['count'] = !empty($_POST['count']) ? ($cart[$k]['count'] + $_POST['count']) : '';
                                $idExists = true;
                                break;
                            }
                        }
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

    public function retrieveAction()
    {
        $data = [];
        $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart']) : null;
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        if (!empty($cart)) {
            foreach ($cart as $k => $item) {
                $product = $productModel->fetchByClause("left join image on image.product_id = product.id and image.base_image = 1 where product.id = $item->id order by created desc", 'product.*, image.url, image.label ');
                $product = $product[0];
                $product->order_count = $item->count;
                $product->real_price = !empty($product->sale) ? $product->sale : $product->price;
                $product->url = !empty($product->url) ? $product->url : 'updatelater.jpg';
                $data[$k] = $product;
            }
            $this->responseApi(0, 'retrieve ok', $data);
        } else {
            $this->responseApi(130002);
        }
    }

}