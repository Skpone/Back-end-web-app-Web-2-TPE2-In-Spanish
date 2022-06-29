<?php
/* Smarty version 4.1.1, created on 2022-06-21 19:22:17
  from 'C:\xampp\htdocs\projects\TPE1\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b1fe495622f3_28831326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6470fbf53f0f74bce66f6ae47306e6a64d78cf1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE1\\templates\\formLogin.tpl',
      1 => 1655830225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62b1fe495622f3_28831326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form method="POST" action="verify">
        <label for="email">Correo:</label>
        <input type="text" name="email" required>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required minlength="8" maxlength="16">
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        <?php }?>
        <button type="submit">Entrar</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
