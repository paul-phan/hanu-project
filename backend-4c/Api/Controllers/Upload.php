<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 */
namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;
use Library\Tools;

class Upload extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        global $connection;
        $co = $connection->getCo();
        $productModel = new \Administration\Models\Product($co);
        // construct the SQL request
        if (!empty($_GET['product'])) { //check nullity of get params first
            $sql = $productModel->conStructSQL($_GET["product"]);
            $productList = $productModel->fetchMatchedFields($sql);
        }
        // check for nullity of array $productList
        if (!empty($productList)) {
            $this->responseApi(0, "fetch successfully", $productList);
        } else {
            $this->responseApi(130002);
        }
    }

    public function product_imageAction()
    {
        global $connection;
        $co = $connection->getCo();
        $imageModel = new \Administration\Models\Image($co);
        if ($_POST && isset($_FILES['image'])) {
            $image = $_FILES['image'];
            $upload = new \Library\Tools\Upload();
            $name = $upload->copy(array(
                'file' => $image,
                'path' => 'product/', //name your optional folder if needed
                // name your file name if needed
            ));
            $_POST['image']['url'] = isset($name) ? '/product/' . $name : '/product/updatelater.jpg';
            if ($imageModel->insertImage($_POST['image'])) {
                $this->responseApi(0, 'Upload successfully', $_POST);
            } else {
                $this->responseApi(120000);
            }
        } else {
            $this->responseApi(130002);
        }
    }

    public function upload_only()
    {
        if (isset($_FILES['file'])) {
            $image = $_FILES['image'];
            $upload = new \Library\Tools\Upload();
            $name = $upload->copy(array(
                'file' => $image,
                'path' => 'product/', //name your optional folder if needed
                // name your file name if needed
            ));
            if (isset($name) && $name != false) {
                $this->responseApi(0, 'Upload successfully', $name);
            } else {
                $this->responseApi(0);
            }
        } else {
            $this->responseApi(0);
        }
    }
}