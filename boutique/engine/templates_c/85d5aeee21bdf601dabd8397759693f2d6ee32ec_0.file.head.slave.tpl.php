<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-10 17:07:54
  from '/var/www/html/boutique/engine/templates/front-office/head.slave.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602404da11d463_51763488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85d5aeee21bdf601dabd8397759693f2d6ee32ec' => 
    array (
      0 => '/var/www/html/boutique/engine/templates/front-office/head.slave.tpl',
      1 => 1603110388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602404da11d463_51763488 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    

    <head>    
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/lib/bootstrap/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title><?php echo $_smarty_tpl->tpl_vars['general']->value[0]['title'];?>
</title>
        <!-- Matomo -->
<?php echo '<script'; ?>
 type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//localhost/matomo/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
<?php echo '</script'; ?>
>
<!-- End Matomo Code -->
    </head><?php }
}
