<?php
/* Smarty version 4.1.1, created on 2022-06-24 04:43:33
  from 'C:\xampp\htdocs\projects\TPE1\templates\tableProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b524d5e398d3_89420489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b1bbc6265fffa8f33271c47bf8f4f34e6f5065d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE1\\templates\\tableProducts.tpl',
      1 => 1656038611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tableForm.tpl' => 1,
    'file:productFilterForm.tpl' => 1,
    'file:categoryFilterForm.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62b524d5e398d3_89420489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_SESSION['USER_ID']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tableForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender("file:productFilterForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:categoryFilterForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <table>
        <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <a href="table">>🏠<</a></h3>
        <h4 id="modifyError"></h4>
        <thead>
            <th>producto</th>
            <th>categoria</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->category;?>
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
