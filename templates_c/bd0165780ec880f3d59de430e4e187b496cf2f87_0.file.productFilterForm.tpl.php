<?php
/* Smarty version 4.1.1, created on 2022-06-28 01:38:05
  from 'C:\xampp\htdocs\projects\TPE2\templates\productFilterForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ba3f5d0549d2_77348853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd0165780ec880f3d59de430e4e187b496cf2f87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE2\\templates\\productFilterForm.tpl',
      1 => 1656036814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ba3f5d0549d2_77348853 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="productFilterForm" action="filterProduct">
    <label>Filtrar por producto:</label><br>
    <input type="text" name="params" required>
    <button type="submit">Filtrar</button>
</form><?php }
}
