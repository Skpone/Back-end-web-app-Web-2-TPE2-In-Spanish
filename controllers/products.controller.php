<?php
include_once 'models/products.model.php';
include_once 'views/products.view.php';
require_once 'helpers/auth.helper.php';

class ProductsController
{
    private $model;
    private $view;

    private $authHelper;

    public function __construct()
    {
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
        $this->authHelper = new AuthHelper();
    }

    public function showProducts($product = null, $country = null)
    {
        if ($product) {
            $products = $this->model->getAllProductsByProduct($product);
        } else if ($country) {
            $products = $this->model->getAllProductsByCountry($country);
        } else {
            $products = $this->model->getAllProducts();
        }

        $this->view->showProducts($products);
    }

    function addProduct($product, $country, $price)
    {
        $this->model->insertProduct($product, $country, $price);

        header("Location: " . BASE_URL);
    }

    function modifyProduct($id, $product, $country, $price)
    {
        $this->model->modifyProduct($id, $product, $country, $price);
        header("Location: " . BASE_URL);
    }

    function deleteProduct($id)
    {
        $this->model->deleteProduct($id);
        header("Location: " . BASE_URL);
    }
    //para cuando agregue input para modificar `products` (hacerlo cuando ya tenga seccion de admins)
    /*
    function getProducts($product) { //filtrar x nombre
        //hacerlo una vez q obtenga el input y lo meta en la url con el js
    }*/
}
