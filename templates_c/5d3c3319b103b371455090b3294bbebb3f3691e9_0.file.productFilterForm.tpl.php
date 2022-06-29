<?php
/* Smarty version 4.1.1, created on 2022-06-24 04:19:38
  from 'C:\xampp\htdocs\projects\TPE1\templates\productFilterForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b51f3af0c057_47476207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d3c3319b103b371455090b3294bbebb3f3691e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE1\\templates\\productFilterForm.tpl',
      1 => 1656036812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b51f3af0c057_47476207 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="productFilterForm" action="filterProduct">
    <label>Filtrar por producto:</label><br>
    <input type="text" name="params" required>
    <button type="submit">Filtrar</button>
</form><?php }
}
