<?php
/* Smarty version 4.1.1, created on 2022-06-29 05:02:07
  from 'C:\xampp\htdocs\projects\TPE2\templates\countryFilterForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62bbc0af2474a3_35566457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '788ac54984f6e50735c3f8361aa167493d4700bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE2\\templates\\countryFilterForm.tpl',
      1 => 1656471419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bbc0af2474a3_35566457 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="countryFilterForm" action="filterCountry">
    <label>Filtrar por país:</label><br>
    <select name="params" required>
        <option></option>
        <option value="argentina">Argentina</option>
        <option value="italia">Italia</option>
        <option value="china">China</option>
    </select>
    <button type="submit">Filtrar</button>
</form><?php }
}
