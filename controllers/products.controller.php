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

    public function showProducts()
    {
        $this->view->showProducts();
    }
}
