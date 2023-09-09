<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-10 17:07:54
  from '/var/www/html/boutique/engine/templates/front-office/body.slave.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602404da122639_37769941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a5e07a815f14892cad0023288d88b11e49a7ee' => 
    array (
      0 => '/var/www/html/boutique/engine/templates/front-office/body.slave.tpl',
      1 => 1601278172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:main.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_602404da122639_37769941 (Smarty_Internal_Template $_smarty_tpl) {
?><body>

        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php echo '<script'; ?>
 type="text/javascript" src="./assets/lib/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="./assets/lib/jquery/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="./assets/js/panier.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
