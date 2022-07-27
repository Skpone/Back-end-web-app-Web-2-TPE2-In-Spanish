<!DOCTYPE html>
<html lang="en">

<head>
    <base id="baseURL" href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--importamos el vue-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>COMIDA CASERA</title>
</head>
<body>
    <header class="mx-5">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand mx-auto fs-2" href="tableProducts">
                    <img src="./img/png-transparent-pasta-italian-cuisine-spaghetti-computer-icons-menu-food-text-logo.png" alt="" width="47" height="42" class="d-inline-block align-text-top">
                    COMIDA CASERA
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarNav" class="collapse navbar-collapse ms-5">
                    <ul class="navbar-nav ">
                        <li class="nav-item fs-5"><a class="nav-link" href="tableProducts">Catálogo</a></li>
                        {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}{*si USER_ADMIN es 1 entonces proceda. PD: el isset para q no me tire error, ns pq*}
                            <li class="nav-item fs-5">
                                <a class="nav-link" href="usersList">Usuarios<a>
                            </li>
                        {/if}
                        {if isset($smarty.session.USER_ID)} {* $_SESSION['USER_ID'] *}
                            <li class="nav-item fs-5">
                                <a class="nav-link" href="logout" id="user-id" data-id="{$smarty.session.USER_ID}">Logout ({$smarty.session.USER_EMAIL})</a>
                            </li>
                        {else}
                            <li class="nav-item fs-5">
                                <a class="nav-link" href="login">Ingresar</a>
                            </li>
                            <li class="nav-item fs-5">
                                <a class="nav-link" href="register">Registrarse</a>
                            </li>
                        {/if}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="container">