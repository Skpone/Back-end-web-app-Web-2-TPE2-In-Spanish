<?php
/* Smarty version 4.1.1, created on 2022-06-23 04:41:29
  from 'C:\xampp\htdocs\projects\TPE1\templates\tableForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b3d2d9da6a75_39018625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dbd16a758175d0391bf8153b640483033b076b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE1\\templates\\tableForm.tpl',
      1 => 1655952086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b3d2d9da6a75_39018625 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="tableForm" action="add-product">
    <div>
        <label>Nombre Producto:</label><br>
        <input type="text" name="params" required>    
    </div>
    <div>
        <label>Categoria:</label><br>
        <select name="params" required>
            <option></option>
            <option value="jóvenes">jóvenes</option>
            <option value="niños">niños</option>
            <option value="adultos">adultos</option>
        </select>
    </div>
    <div>
        <label>Precio:</label><br>
        <input type="text" name="params" required>    
    </div>
    <button type="submit">Agregar</button>
</form><?php }
}
