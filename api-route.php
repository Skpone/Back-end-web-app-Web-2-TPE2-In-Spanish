<?php

require_once 'libs/Router.php';
require_once 'api/api-products.controller.php';
require_once 'api/api-comments.controller.php';

// creo el router
$router = new Router();

// tabla de ruteo
//products
$router->addRoute('products', 'GET', 'ApiProductsController', 'getProducts');
$router->addRoute('products/:ID', 'GET', 'ApiProductsController', 'getProduct');
$router->addRoute('products/:ID', 'DELETE', 'ApiProductsController', 'deleteProduct');
$router->addRoute('products', "POST", 'ApiProductsController', 'addProduct');
$router->addRoute('products/:ID', "PUT", 'ApiProductsController', 'modifyProduct');

//comments                 //este id del get es el id del producto
$router->addRoute('comments/:ID', 'GET', 'ApiCommentsController', 'getComments');
$router->addRoute('comments', 'POST', 'ApiCommentsController', 'addComment');
$router->addRoute('comments/:ID', 'DELETE', 'ApiCommentsController', 'deleteComment');

// rutea
$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);
