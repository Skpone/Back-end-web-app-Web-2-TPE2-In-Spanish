<?php
/* Smarty version 4.1.1, created on 2022-06-23 03:01:27
  from 'C:\xampp\htdocs\projects\TPE1\templates\categoryFilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b3bb672e2f21_61781022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ceacfce1781508d7fb3e8c5883e704dddff0f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE1\\templates\\categoryFilter.tpl',
      1 => 1655946083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b3bb672e2f21_61781022 (Smarty_Internal_Template $_smarty_tpl) {
?><form class='filterForm' action="filter">
    <label>Filtrar por categoría:</label><br>
    <input type="text" name="params" placeholder="categoría">
    <input type="text" name="params" placeholder="caca">
    <button type="submit">Filtrar</button>
</form><?php }
}
