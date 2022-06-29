<!DOCTYPE html>
<html lang="en">

<head>
    <base id="baseURL" href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIPLLAS</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1 class="logo">ZIPLLAS</h1>
        </div>
        <nav>
            <ul>
                <li><a href="table">Catálogo</a></li>
                {* <li><a href="">Home</a></li> <!-- puedo hacer un home aca--> *}
                <li>
                    {if isset($smarty.session.USER_ID)} {* $_SESSION['USER_ID'] *}
                        <a href="logout">({$smarty.session.USER_EMAIL}) Logout</a>
                    {else}
                        <a href="login">Ingresar</a>
                    {/if}
                </li>
                {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}{*si USER_ADMIN es 1 entonces proceda. PD: el isset para q no me tire error, ns pq*}
                    <li>
                        <a href="usersList">Usuarios<a>
                    </li>
                {/if}
            </ul>
        </nav>
    </header>
    
    <div class="container">