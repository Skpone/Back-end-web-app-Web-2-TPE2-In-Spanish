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

    public function showProducts($product = null, $type = null, $country = null, $ingredients = null, $price = null)
    {
        if($product && $type && $country && $ingredients && $price){
            $products = $this->model->getAllProductsByAdvancedSearch($product, $type, $country, $ingredients, $price);
        } else if ($country) {
            $products = $this->model->getAllProductsByCountry($country);
        } else {
            $products = $this->model->getAllProducts();
        }

        $this->view->showProducts($products);
    }
}
