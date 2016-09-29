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
            'company_id' => isset($post['company_id']) ? $post['company_id'] : '',
            'title' => isset($post['title']) ? $post['title'] : '',
            'count' => isset($post['count']) ? $post['count'] : '',
            'price' => isset($post['price']) ? $post['price'] : '',
            'detail' => isset($post['detail']) ? $post['detail'] : '',
            'sale' => isset($post['sale']) ? $post['sale'] : '0',
            'created' => date("Y:m:d H:i:s"),
            'active' => 1,
            'params' => $this->slugify(time() . '-' . $post['title']),
            'tags' => isset($post['tags']) ? $post['tags'] : 'no,tag',
            'product_year' => isset($post['product_year']) ? $post['product_year'] : ''
        ));
    }

    public function modifyProduct($post, $id)
    {
        // TODO: Implement modifyProduct() method.
        return $this->update(array(
            'company_id' => $post['company_id'],
            'title' => $post['title'],
            'count' => $post['count'],
            'price' => $post['price'],
            'detail' => $post['detail'],
            'sale' => $post['sale'],
            'active' => isset($post['active']) ? $post['active'] : 0,
            'tags' => isset($post['tags']) ? $post['tags'] : 'no,tag',
            'product_year' => isset($post['product_year']) ? $post['product_year'] : ''
        ), " id = '$id' ");
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