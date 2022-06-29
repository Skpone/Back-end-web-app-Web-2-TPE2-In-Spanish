<?php
/* Smarty version 4.1.1, created on 2022-06-13 22:03:34
  from '/opt/lampp/htdocs/proyectos/TPE1/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62a79816c2bdd3_12861811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64df141fcf034b8e27f889eb0656990959c2752c' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/TPE1/templates/header.tpl',
      1 => 1655150612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a79816c2bdd3_12861811 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
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
                                <li>
                    <?php if ((isset($_SESSION['USER_ID']))) {?>                         <a href="logout">(<?php echo $_SESSION['USER_EMAIL'];?>
) Logout</a>
                    <?php } else { ?>
                        <a href="login">Ingresar</a>
                    <?php }?>
                </li>
            </ul>
        </nav>
    </header>
    
    <div class="container"><?php }
}
