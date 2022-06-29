<?php
/* Smarty version 4.1.1, created on 2022-06-24 04:10:22
  from 'C:\xampp\htdocs\projects\TPE1\templates\categoryFilterForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b51d0e61eb15_71593955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15ccf79396a779a53bc1a60723a29c0b3343478b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE1\\templates\\categoryFilterForm.tpl',
      1 => 1656036604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b51d0e61eb15_71593955 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="categoryFilterForm" action="filterCategory">
    <label>Filtrar por categoría:</label><br>
    <select name="params" required>
        <option></option>
        <option value="jóvenes">jóvenes</option>
        <option value="niños">niños</option>
        <option value="adultos">adultos</option>
    </select>
    <button type="submit">Filtrar</button>
</form><?php }
}
