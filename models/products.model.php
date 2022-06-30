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

        $products = $query->fetch(PDO::FETCH_OBJ);

        return $product;
    }

    function getAllProductsByProduct($product)
    {
        $query = $this->db->prepare('SELECT * FROM products WHERE product = ?');
        $query->execute([$product]);

        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;
    }

    function getAllProductsByCountry($country)
    {
        $query = $this->db->prepare('SELECT * FROM products WHERE country = ?');
        $query->execute([$country]);

        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;
    }

    function getAllProductsByAdvancedSearch($product,$country,$price)
    {
        $query = $this->db->prepare('SELECT * FROM products WHERE product = ? && country = ? && price = ?');
        $query->execute([$product, $country, $price]);

        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;
    }

    function insertProduct($product, $country, $price)
    {
        $query = $this->db->prepare('INSERT INTO products(product, country, price) VALUES (?, ?, ?)');
        $query->execute([$product, $country, $price]);

        return $this->db->lastInsertId();
    }

    function modifyProduct($id, $product, $country, $price)
    {
        $query = $this->db->prepare('UPDATE `products` SET `product` = ?,`country` = ?,`price` = ? WHERE `products`.`id` = ?');
        $query->execute([$product, $country, $price, $id]);
    }

    function deleteProduct($id)
    {
        $query = $this->db->prepare('DELETE FROM products WHERE id=?');
        $query->execute([$id]);
    }

    //esto de abajo lo logro con hacer un input para q funque (con js) (es para filtrar)
    /*
        function getProduct($id) {

            $query = $this->db->prepare('SELECT * FROM products WHERE id = ?');
            $query->execute([$id]);

            return $query->fetch(PDO::FETCH_OBJ);
        }*/

    // hacer un update_price(?

}
