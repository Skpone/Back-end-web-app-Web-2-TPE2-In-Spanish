<?php
/* Smarty version 4.1.1, created on 2022-06-28 01:38:05
  from 'C:\xampp\htdocs\projects\TPE2\templates\categoryFilterForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ba3f5d0b3982_32024187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '213a0402592dda319f019fce6820f69678af3549' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE2\\templates\\categoryFilterForm.tpl',
      1 => 1656036606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ba3f5d0b3982_32024187 (Smarty_Internal_Template $_smarty_tpl) {
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
