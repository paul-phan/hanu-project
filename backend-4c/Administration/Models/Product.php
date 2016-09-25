<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 21/09/2016
 * Time: 2:15 CH
 */
namespace Administration\Models;

use Library\Core\Model as MainModel;
use Library\Core\ProductModel;

class Product extends MainModel implements ProductModel
{
    protected $table = 'product';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertProduct($post)
    {
        return $this->insert(array(
            'category_id' => $post['category_id'],
            'company_id' => $post['company_id'],
            'title' => $post['title'],
            'params' => $post['params'],
            'price' => $post['price'],
            'detail' => $post['detail'],
            'type' => $post['type'],
            'sale' => $post['sale'],
            'tags' => $post['tags'],
            'view' => $post['view'],
            'created' => date("Y:m:d H:i:s"),
            'active' => isset($post['active']) ? $post['active'] : 1,
            'manufactured_date' => date("Y:m:d H:i:s"),
        ));
    }

    public function modifyProduct($post, $id)
    {
        // TODO: Implement modifyProduct() method.
    }

    /**
     * construct hay gì viết vào đây nhé
     * construct a SQL request string
     * @param $value
     * @return string
     */
    public function conStructSQL($value)
    {
        $sql = "SELECT company.com_name, product.* FROM product
        LEFT JOIN company
        ON product.company_id=company.id
        WHERE product.title LIKE '%$value%' OR company.com_name LIKE '%$value%' OR product.detail LIKE '%$value%' OR product.sale LIKE '%$value%' OR product.price LIKE '%$value%' OR product.type LIKE '%$value%' OR product.tags LIKE '%$value%'";
        return $sql;
    }
}