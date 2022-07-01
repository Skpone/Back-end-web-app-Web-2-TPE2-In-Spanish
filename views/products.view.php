<?php
include_once './libs/smarty-4.1.1/libs/Smarty.class.php';

class ProductsView {
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showProducts($products){
        $this->smarty->assign('title', 'Lista de Productos');
        $this->smarty->assign('products', $products); 

        $this->smarty->display('templates/tableProductsCSR.tpl');
    }
}