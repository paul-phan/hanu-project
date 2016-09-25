<?php
/**
 * Created by PhpStorm.
 * User: Phan Minh
 */
namespace Api\Controllers;

use Api\Controllers\ApiController as MainController;
use Library\Tools;
use Library\Core\Model;

class Product extends MainController
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
        $sql=$this->conStructSQL($_GET["product"]);
        $productList = $productModel->fetchMatchedFields($sql);
        // check for nullity of array $productList
        if(!empty($productList)) {
            $this->responseApi(0, "fetch successfully", $productList);
        }
        else{
            $this->responseApi(130002);
        }
    }

    /** construct a SQL request string
     * @param $value
     * @return string
     */
    private function conStructSQL($value){
        $sql="SELECT company.com_name, product.* FROM product
        INNER JOIN company
        ON product.company_id=company.id
        WHERE product.title LIKE '$value' OR company.com_name LIKE '$value' OR product.detail LIKE '$value' OR product.sale LIKE '$value' OR product.price LIKE '$value' OR product.type LIKE '$value' OR product.tags LIKE '$value'";
        return $sql;
    }
}