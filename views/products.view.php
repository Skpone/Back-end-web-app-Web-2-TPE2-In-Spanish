<?php
include_once './libs/smarty-4.1.1/libs/Smarty.class.php';

class ProductsView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showProducts($countries) {
        $this->smarty->assign('title', 'Lista de Productos');
        $this->smarty->assign('countries', $countries);

        $this->smarty->display('templates/tableProductsCSR.tpl');
    }

    function showProductDetails($product) {
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/productDetailsCSR.tpl');
    }
}