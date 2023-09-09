<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-25 11:58:45
  from '/var/www/html/boutique/engine/templates/front-office/produits.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f955a6502f0f7_60308908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06748dad57ee44a1c85bf1d8d07f83b164ff44dd' => 
    array (
      0 => '/var/www/html/boutique/engine/templates/front-office/produits.tpl',
      1 => 1600341628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f955a6502f0f7_60308908 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produits']->value, 'produit');
$_smarty_tpl->tpl_vars['produit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->do_else = false;
?>

<h2><?php echo $_smarty_tpl->tpl_vars['produit']->value['titre'];?>
</h2>
<p><?php echo $_smarty_tpl->tpl_vars['produit']->value['description'];?>
</p>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
