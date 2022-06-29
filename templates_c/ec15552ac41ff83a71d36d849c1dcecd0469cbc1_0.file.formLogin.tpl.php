<?php
/* Smarty version 4.1.1, created on 2022-06-14 15:07:40
  from '/opt/lampp/htdocs/proyectos/TPE1/templates/formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62a8881c986791_12979571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec15552ac41ff83a71d36d849c1dcecd0469cbc1' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/TPE1/templates/formLogin.tpl',
      1 => 1655212056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62a8881c986791_12979571 (Smarty_Internal_Template $_smarty_tpl) {
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
