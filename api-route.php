<?php

require_once 'libs/Router.php';
require_once 'api/api-products.controller.php';

// creo el router
$router = new Router();

// tabla de ruteo
$router->addRoute('products', 'GET', 'ApiProductsController', 'getProducts');
$router->addRoute('products/:ID', 'GET', 'ApiProductsController', 'getProduct');
$router->addRoute('products/:ID', 'DELETE', 'ApiProductsController', 'deleteProduct');
$router->addRoute('products', "POST", 'ApiProductsController', 'addProduct');
$router->addRoute('products/:ID', "PUT", 'ApiProductsController', 'modifyProduct');


// rutea
$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);
