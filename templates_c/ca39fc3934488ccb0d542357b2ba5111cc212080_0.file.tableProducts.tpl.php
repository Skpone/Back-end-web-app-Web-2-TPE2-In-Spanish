<?php
/* Smarty version 4.1.1, created on 2022-06-29 19:02:15
  from 'C:\xampp\htdocs\projects\TPE2\templates\tableProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62bc85976b2518_91900755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca39fc3934488ccb0d542357b2ba5111cc212080' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE2\\templates\\tableProducts.tpl',
      1 => 1656471757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tableForm.tpl' => 1,
    'file:productFilterForm.tpl' => 1,
    'file:countryFilterForm.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62bc85976b2518_91900755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_SESSION['USER_ID']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tableForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender("file:productFilterForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:countryFilterForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <table>
        <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <a href="table">>🏠<</a></h3>
        <h4 id="modifyError"></h4>
        <thead>
            <th>producto</th>
            <th>país</th>
            <th>precio</th>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->product;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->country;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</td>
                    <?php if ((isset($_SESSION['USER_ID']))) {?>
                        <td><button class="modifyBtns" id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">Editar</button></td>
                        <td><a href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">Borrar</a></td>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
