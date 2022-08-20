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

        $query = $this->db->prepare('SELECT a.id, a.product, a.type, b.country, a.ingredients, a.price FROM products a INNER JOIN countries b ON a.id_country_fk = b.id');
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;
    }
    
    function getProductByID($id)
    {
        $query = $this->db->prepare('SELECT a.id, a.product, a.type, b.country, a.ingredients, a.price FROM products a INNER JOIN countries b ON a.id_country_fk = b.id WHERE a.id = ?');
        $query->execute([$id]);

        $product = $query->fetch(PDO::FETCH_OBJ);

        return $product;
    }

    function insertProduct($product, $type, $id_country_fk, $ingredients, $price)
    {
        $query = $this->db->prepare('INSERT INTO products(product, type, id_country_fk, ingredients, price) VALUES (?, ?, ?, ?, ?)');
        $query->execute([$product, $type, $id_country_fk, $ingredients, $price]);

        return $this->db->lastInsertId();
    }

    function modifyProduct($id, $product, $type, $id_country_fk, $ingredients, $price)
    {
        $query = $this->db->prepare('UPDATE `products` SET `product` = ?,`type` = ?,`id_country_fk` = ?,`ingredients` = ?,`price` = ? WHERE `products`.`id` = ?');
        $query->execute([$product, $type, $id_country_fk, $ingredients, $price, $id]);
    }

    function deleteProduct($id)
    {
        $query = $this->db->prepare('DELETE FROM products WHERE id=?');
        $query->execute([$id]);
    }
    
}
