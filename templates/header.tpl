<!DOCTYPE html>
<html lang="en">

<head>
    <base id="baseURL" href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--importamos el vue-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>COMIDA CASERA</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1 class="logo">COMIDA CASERA</h1>
        </div>
        <nav>
            <ul>
                <li><a href="tableProducts">Catálogo</a></li>
                {* <li><a href="">Home</a></li> <!-- puedo hacer un home aca--> *}
                {if isset($smarty.session.USER_ID)} {* $_SESSION['USER_ID'] *}
                    <li>
                        <a href="logout" id="user-id" data-id="{$smarty.session.USER_ID}">({$smarty.session.USER_EMAIL}) Logout</a>
                    </li>
                {else}
                    <li>
                        <a href="login">Ingresar</a>
                    </li>
                    <li>
                        <a href="register">Registrarse</a>
                    </li>
                {/if}
                {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}{*si USER_ADMIN es 1 entonces proceda. PD: el isset para q no me tire error, ns pq*}
                    <li>
                        <a href="usersList">Usuarios<a>
                    </li>
                {/if}
            </ul>
        </nav>
    </header>
    
    <div class="container">