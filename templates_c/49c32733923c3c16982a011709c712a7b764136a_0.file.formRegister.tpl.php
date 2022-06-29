<?php
/* Smarty version 4.1.1, created on 2022-06-29 20:13:09
  from 'C:\xampp\htdocs\projects\TPE2\templates\formRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62bc9635d36091_08696830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c32733923c3c16982a011709c712a7b764136a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\TPE2\\templates\\formRegister.tpl',
      1 => 1656526186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62bc9635d36091_08696830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1>Registrate!</h1>
    <form method="POST" action="verifyRegister">
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
