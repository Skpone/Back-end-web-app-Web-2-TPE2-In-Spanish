<?php
/* Smarty version 4.1.1, created on 2022-06-23 05:08:53
  from 'C:\xampp\htdocs\projects\TPE1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b3d9457f0bb5_52352178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34af0bf471a3c0e1aa3ebee7ec58666f25ad9004' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE1\\templates\\header.tpl',
      1 => 1655953405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b3d9457f0bb5_52352178 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base id="baseURL" href="<?php echo BASE_URL;?>
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
                <?php if ((isset($_SESSION['USER_ADMIN'])) && ($_SESSION['USER_ADMIN'])) {?>                    <li>
                        <a href="usersList">Usuarios<a>
                    </li>
                <?php }?>
            </ul>
        </nav>
    </header>
    
    <div class="container"><?php }
}
