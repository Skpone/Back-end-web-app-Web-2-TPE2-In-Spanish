<?php
require_once 'api/api.view.php';
require_once 'models/products.model.php';

class ApiProductsController {
    private $model;
    private $view;
    //data es variable global para cuando nesecitemos datos que agarramos del php//input
    private $data;

    function __construct() {
        $this->model = new ProductsModel();
        $this->view = new ApiView();
    }

    //esta funcion agarra lo que esté en el php://input AKA body php para funciones como insertProduct o modifyProduct PD: retorna en json para no tener q usar más código
    private function getBody() {
        $data = file_get_contents("php://input");
        return json_decode($data);
    }

    public function getProducts() {
        $products = $this->model->getAllProducts();
        $this->view->response($products);
    }

    public function getProduct($params = null) {
        //params es un arreglo asociativo que es generado x el Router
        $id = $params[':ID'];

        $product = $this->model->getProductByID($id);

        //si existe un producto con el id obtenido entonces mostrarlo
        if ($product) {
            $this->view->response($product);
        } else {
            $this->view->response("Product id=$id not found", 404);
        }
    }

    public function deleteProduct($params = null) {
        $id = $params[':ID'];

        $product = $this->model->getProductByID($id);
        
        if ($product) {
            $this->model->deleteProduct($id);
            $this->view->response("Product id=$id removed successfully");
        } else {
            $this->view->response("Product id=$id not found", 404);
        }
    }

    public function addProduct($params = null) {
        $data = $this->getBody();

        $product = $data->product;
        $type = $data->type;
        $country = $data->country;
        $ingredients = $data->ingredients;
        $price = $data->price;

        $id = $this->model->insertProduct($product, $type, $country, $ingredients, $price);
        
        $product = $this->model->getProductByID($id);
        if ($product)
            $this->view->response($product);
        else
            $this->view->response("Error creating product", 500);
    }

    public function modifyProduct($params = null) {
        
        //id del product q vamos a modificar
        $id = $params[':ID'];

        //datos que le vamos a modificar
        $data = $this->getBody();

        $product = $data->product;
        $type = $data->type;
        $country = $data->country;
        $ingredients = $data->ingredients;
        $price = $data->price;

        if ($product) {
            $this->model->modifyProduct($id, $product, $type, $country, $ingredients, $price);
            $this->view->response("Product modified successfully.");
        } else
            $this->view->response("Product id={$id} doesn't exist", 404);
    }
}