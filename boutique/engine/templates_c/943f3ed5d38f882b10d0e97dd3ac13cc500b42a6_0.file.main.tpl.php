<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-10 17:07:54
  from '/var/www/html/boutique/engine/templates/front-office/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602404da1381d7_93997871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '943f3ed5d38f882b10d0e97dd3ac13cc500b42a6' => 
    array (
      0 => '/var/www/html/boutique/engine/templates/front-office/main.tpl',
      1 => 1602279118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:produits.tpl' => 1,
  ),
),false)) {
function content_602404da1381d7_93997871 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container-fluid">

        <?php if ($_smarty_tpl->tpl_vars['page']->value === '') {?>
    <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['general']->value[0]['title'];?>
</h2>
    <section class="row">
     
        <?php
$_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['indice']->step = 1;$_smarty_tpl->tpl_vars['indice']->total = (int) ceil(($_smarty_tpl->tpl_vars['indice']->step > 0 ? 3+1 - (0) : 0-(3)+1)/abs($_smarty_tpl->tpl_vars['indice']->step));
if ($_smarty_tpl->tpl_vars['indice']->total > 0) {
for ($_smarty_tpl->tpl_vars['indice']->value = 0, $_smarty_tpl->tpl_vars['indice']->iteration = 1;$_smarty_tpl->tpl_vars['indice']->iteration <= $_smarty_tpl->tpl_vars['indice']->total;$_smarty_tpl->tpl_vars['indice']->value += $_smarty_tpl->tpl_vars['indice']->step, $_smarty_tpl->tpl_vars['indice']->iteration++) {
$_smarty_tpl->tpl_vars['indice']->first = $_smarty_tpl->tpl_vars['indice']->iteration === 1;$_smarty_tpl->tpl_vars['indice']->last = $_smarty_tpl->tpl_vars['indice']->iteration === $_smarty_tpl->tpl_vars['indice']->total;?> 


        <section class="col-6  ">



                <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titles']->value[$_smarty_tpl->tpl_vars['indice']->value];?>
</h2>
                <div class="row justify-content-center ">
                    <?php
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['article']->step = 1;$_smarty_tpl->tpl_vars['article']->total = (int) ceil(($_smarty_tpl->tpl_vars['article']->step > 0 ? 1+1 - (0) : 0-(1)+1)/abs($_smarty_tpl->tpl_vars['article']->step));
if ($_smarty_tpl->tpl_vars['article']->total > 0) {
for ($_smarty_tpl->tpl_vars['article']->value = 0, $_smarty_tpl->tpl_vars['article']->iteration = 1;$_smarty_tpl->tpl_vars['article']->iteration <= $_smarty_tpl->tpl_vars['article']->total;$_smarty_tpl->tpl_vars['article']->value += $_smarty_tpl->tpl_vars['article']->step, $_smarty_tpl->tpl_vars['article']->iteration++) {
$_smarty_tpl->tpl_vars['article']->first = $_smarty_tpl->tpl_vars['article']->iteration === 1;$_smarty_tpl->tpl_vars['article']->last = $_smarty_tpl->tpl_vars['article']->iteration === $_smarty_tpl->tpl_vars['article']->total;?> 

                        <article class="col-md-4 mx-2 h-75 mb-2 p-2">
                            
                            <h3 class=""><?php echo $_smarty_tpl->tpl_vars['produits']->value[$_smarty_tpl->tpl_vars['indice']->value][$_smarty_tpl->tpl_vars['article']->value]['titre'];?>
</h3>
                            
                            <p class=""><?php echo $_smarty_tpl->tpl_vars['produits']->value[$_smarty_tpl->tpl_vars['indice']->value][$_smarty_tpl->tpl_vars['article']->value]['description'];?>
</p>
                            <img class="img-fluid" src="./assets/img<?php echo $_smarty_tpl->tpl_vars['produits']->value[$_smarty_tpl->tpl_vars['indice']->value][$_smarty_tpl->tpl_vars['article']->value]['image'];?>
">
                            <a href="./?article=<?php echo $_smarty_tpl->tpl_vars['produits']->value[$_smarty_tpl->tpl_vars['indice']->value][$_smarty_tpl->tpl_vars['article']->value]['id'];?>
" class="btn boutton rounded w-100 text-white font-weight-bold">Commander</a>
                            

                        </article>

                    <?php }
}
?>
                 </div>
        </section>

        <?php }
}
?>
    </section>
    <?php } elseif (strstr($_smarty_tpl->tpl_vars['page']->value,"article")) {?>

       <article class="col-md-4 mx-2 h-75 mb-2 p-2">
                            
                            <h3 class=""><?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['titre'];?>
</h3>
                            
                            <p><?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['description'];?>
</p>
                            <img class="img-fluid" src="./assets/img<?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['image'];?>
">
                           <button id="btnPanier" value="<?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['id'];?>
" class="btn boutton rounded w-100 text-white font-weight-bold">Commander</button>
                            
                            

                        </article>
      <?php } elseif ($_smarty_tpl->tpl_vars['page']->value === "categories") {?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
                
                <a href="./?categorie=<?php echo $_smarty_tpl->tpl_vars['categorie']->value['id'];?>
"><img class="w-25" src="./assets/img/categories/<?php echo $_smarty_tpl->tpl_vars['categorie']->value['image_categorie'];?>
"></a>
                
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marques']->value, 'marque');
$_smarty_tpl->tpl_vars['marque']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marque']->value) {
$_smarty_tpl->tpl_vars['marque']->do_else = false;
?>
                
                <a href="./?marque=<?php echo $_smarty_tpl->tpl_vars['marque']->value['id'];?>
"><img class="w-25" src="./assets/img/marques/<?php echo $_smarty_tpl->tpl_vars['marque']->value['image_marque'];?>
"></a>
                
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            

    <?php } elseif (strstr($_smarty_tpl->tpl_vars['page']->value,"categorie") || strstr($_smarty_tpl->tpl_vars['page']->value,"marque")) {?>



   
    <?php $_smarty_tpl->_subTemplateRender("file:produits.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

     


    <h2>test</h2>
      
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value === "panier") {?>

    <div id="test99"></div>
    <?php }?>



</main>

<?php }
}
