<?php
require_once "controllers/auth.controller.php";
require_once "controllers/products.controller.php";
require_once "controllers/users.controller.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'table';
}
$params = explode('/', $action);

// tabla de ruteo
switch ($params[0]) {
    case 'login':
        $authController = new AuthController();
        $authController->showLogin();
        break;
    case 'verifyLogin':
        $authController = new AuthController();
        $authController->login();
        break;
    case 'register':
        $authController = new Authcontroller();
        $authController->showRegister();
        break;
    case 'verifyRegister':
        $authController = new AuthController();
        $authController->register();
        break;
    case 'table':
        $productsController = new ProductsController();
        $productsController->showProducts();
        break;
    case 'filterCountry':
        $productsController = new ProductsController();
        $productsController->showProducts(null, $params[1]);
        break;
    case 'advancedFilter':
        $productsController = new ProductsController();
        $productsController->showProducts($params[1], $params[2], $params[3], $params[4], $params[5]);
        break;
    case 'usersList':
        $usersController = new UsersController();
        $usersController->showUsers();
        break;
    case 'changeAdmin':
        $usersController = new UsersController();
        $usersController->changeUserAdmin($params[1]/*id*/, $params[2]);
        break;
    case 'deleteUser':
        $usersController = new UsersController();
        $usersController->deleteUser($params[1]);
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    default:
        echo '404 - Página no encontrada';
        break;
}
