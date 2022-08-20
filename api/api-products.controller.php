<?php
require_once 'api/api.view.php';
require_once 'models/products.model.php';
require_once 'helpers/auth.helper.php';

class ApiProductsController {
    private $model;
    private $view;
    private $authHelper;

    function __construct() {
        $this->model = new ProductsModel();
        $this->view = new ApiView();
        $this->authHelper = new AuthHelper();
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

    public function getProduct($params) {
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

    public function deleteProduct($params) {
        $admin = $this->authHelper->obtainAdminState();
        if ($admin) {

            $id = $params[':ID'];

            $product = $this->model->getProductByID($id);
            
            if ($product) {
                $this->model->deleteProduct($id);
                $this->view->response("Product id=$id removed successfully");
            } else {
                $this->view->response("Product id=$id not found", 404);
            }
        }else{
            $this->view->response("Unauthorized", 401);
        }
    }

    public function addProduct() {
        $admin = $this->authHelper->obtainAdminState();
        if ($admin) {
            $data = $this->getBody();

            $product = $data->product;
            $type = $data->type;
            $id_country_fk = $data->id_country_fk;
            $ingredients = $data->ingredients;
            $price = $data->price;

            $id = $this->model->insertProduct($product, $type, $id_country_fk, $ingredients, $price);

            $product = $this->model->getProductByID($id);
            if ($product){
                $this->view->response($product);   
            }else{
                $this->view->response("Error creating product", 500);
            }
        }else{
            $this->view->response("Unauthorized", 401);
        }
    }

    public function modifyProduct($params) {
        $admin = $this->authHelper->obtainAdminState();
        if ($admin) {
            $data = $this->getBody();
            //id del product q vamos a modificar
            $id = $params[':ID'];

            $product = $this->model->getProductByID($id);

            if ($product) {
                //datos que le vamos a modificar
                $data = $this->getBody();

                $product = $data->product;
                $type = $data->type;
                $country = $data->country;
                $ingredients = $data->ingredients;
                $price = $data->price;

                $this->model->modifyProduct($id, $product, $type, $country, $ingredients, $price);
                $this->view->response("Product modified successfully.");
            }else{
                $this->view->response("Product id={$id} doesn't exist", 404);
            }
        }else{
            $this->view->response("Unauthorized", 401);
        }
    }
}