<?php
/* Smarty version 4.1.1, created on 2022-06-14 16:04:28
  from '/opt/lampp/htdocs/proyectos/TPE1/templates/tableProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62a8956c2db265_62311020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a77b2131773eb7958ac4ad660612a410aa3eb533' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/TPE1/templates/tableProducts.tpl',
      1 => 1655215465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62a8956c2db265_62311020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <table>
        <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>  
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
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
