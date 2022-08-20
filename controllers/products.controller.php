<?php
include_once 'models/products.model.php';
include_once 'models/countries.model.php';
include_once 'views/products.view.php';
require_once 'helpers/auth.helper.php';

class ProductsController
{
    private $model;
    private $view;
    private $authHelper;
    private $countriesModel;

    public function __construct()
    {
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
        $this->countriesModel = new CountriesModel();
        $this->authHelper = new AuthHelper();
    }

    public function showProducts()
    {
        $countries = $this->countriesModel->getAllCountries();
        $this->view->showProducts($countries);
    }

    public function showProductDetails($id)
    {
        $product = $this->model->getProductByID($id);
        $this->view->showProductDetails($product);
    }
}
