<?php
/* Smarty version 4.1.1, created on 2022-06-29 05:02:07
  from 'C:\xampp\htdocs\projects\TPE2\templates\tableForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62bbc0af1f5be9_59832136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '224954d05e306438c3d92c994cb662bd8e50f561' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE2\\templates\\tableForm.tpl',
      1 => 1656471688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bbc0af1f5be9_59832136 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="tableForm" action="add-product">
    <div>
        <label>Nombre Producto:</label><br>
        <input type="text" name="params" required>    
    </div>
    <div>
        <label>País:</label><br>
        <select name="params" required>
            <option></option>
            <option value="argentina">Argentina</option>
            <option value="italia">Italia</option>
            <option value="china">China</option>
        </select>
    </div>
    <div>
        <label>Precio:</label><br>
        <input type="text" name="params" required>    
    </div>
    <button type="submit">Agregar</button>
</form><?php }
}
