<?php
class ProductsModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_foods;charset=utf8', 'root', '');
    }

    function getAllProducts()
    {

        $query = $this->db->prepare('SELECT * FROM products');
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;
    }

    function getProductByID($id)
    {
        $query = $this->db->prepare('SELECT * FROM products WHERE id = ?');
        $query->execute([$id]);

        $product = $query->fetch(PDO::FETCH_OBJ);

        return $product;
    }

    function insertProduct($product, $type, $country, $ingredients, $price)
    {
        $query = $this->db->prepare('INSERT INTO products(product, type, country, ingredients, price) VALUES (?, ?, ?, ?, ?)');
        $query->execute([$product, $type, $country, $ingredients, $price]);

        return $this->db->lastInsertId();
    }

    function modifyProduct($id, $product, $type, $country, $ingredients, $price)
    {
        $query = $this->db->prepare('UPDATE `products` SET `product` = ?,`type` = ?,`country` = ?,`ingredients` = ?,`price` = ? WHERE `products`.`id` = ?');
        $query->execute([$product, $type, $country, $ingredients, $price, $id]);
    }

    function deleteProduct($id)
    {
        $query = $this->db->prepare('DELETE FROM products WHERE id=?');
        $query->execute([$id]);
    }
    
}
