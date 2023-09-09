<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-10 17:07:54
  from '/var/www/html/boutique/engine/templates/front-office/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602404da1283b7_08421414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e7b4eff5b48b1cad30921040161a1422225cea2' => 
    array (
      0 => '/var/www/html/boutique/engine/templates/front-office/header.tpl',
      1 => 1601306489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602404da1283b7_08421414 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="container-fluid mb-5">

<section class="row align-items-center">
    <img class="img-fluid col-1" src="<?php echo $_smarty_tpl->tpl_vars['liens']->value['icon'];?>
">

    <div class="col-4 offset-1 justify-content-center h-25">
    <input class="barreRecherche"  type="text" placeholder="Rechercher" id="recherche">
    <i class="fa fa-search"></i>
    </div>
    

    <nav class="nav col-5 justify-content-center align-items-center  ">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liens']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
            <a class="nav-item nav-link ml-5" href="<?php echo $_smarty_tpl->tpl_vars['link']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['text'];?>
</a>
         
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <a href="./?panier"><i class="test nav-item nav-link fa fa-shopping-cart ml-5"></i></a>
       <a href="./administration"><i class=" test nav-item nav-link fa fa-user-circle ml-5"></i></a>
        
    </nav>
</section>
    
</header><?php }
}
