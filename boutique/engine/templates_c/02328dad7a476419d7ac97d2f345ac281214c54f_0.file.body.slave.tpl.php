<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-25 20:52:54
  from '/var/www/html/boutique/engine/templates/back-office/body.slave.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f95d79689d766_41038026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02328dad7a476419d7ac97d2f345ac281214c54f' => 
    array (
      0 => '/var/www/html/boutique/engine/templates/back-office/body.slave.tpl',
      1 => 1603649148,
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
function content_5f95d79689d766_41038026 (Smarty_Internal_Template $_smarty_tpl) {
?><body>

        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
                <?php echo '<script'; ?>
 type="text/javascript" src="../assets/js/modifArticle.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
