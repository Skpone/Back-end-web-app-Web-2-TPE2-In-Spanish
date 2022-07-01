<?php
include_once './libs/smarty-4.1.1/libs/Smarty.class.php';

class ProductsView {
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showProducts(){
        $this->smarty->assign('title', 'Lista de Productos');

        $this->smarty->display('templates/tableProductsCSR.tpl');
    }
}