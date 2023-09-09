<?php

include_once('./securityHeader.php');


ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('./engine/smarty/libs/Smarty.class.php');
require_once('./classes/Database.php' );

$smarty = (object) new Smarty();
$smarty->debugging = (bool) false;
$smarty->caching = (bool) false;
$smarty->cache_lifetime = (int) 120;

$smarty->force_compile = (bool) true;

$smarty->setCacheDir('./engine/caches/');
$smarty->setTemplateDir('./engine/templates/front-office/');
$smarty->setCompileDir('./engine/templates_c/');

$produits=[];
$smarty->assign('liens', array(
    'icon' => "./assets/img/icon.png",
    'links' => array(
        array('href' => "./", 'title' => "Accueil", 'text' => "Accueil"),
        array('href' => "./?categories", 'title' => "Produit", 'text' => "Produit")
       
    ),
    
));



// Recupere depuis l'URL la page selectionne
$smarty->assign('page', $_SERVER['QUERY_STRING']);

$connexionBdd = new Database();

$smarty->assign('general', $connexionBdd->getData('SELECT * FROM `general`', []));

$categories =$connexionBdd->getData('SELECT * FROM `categories`', []);

$marques=$connexionBdd->getData('SELECT * FROM `marques`', []);


if ($_SERVER['QUERY_STRING'] === "") {



$titles =[];
$produits=[];

for($i=1; $i<=4; $i++){

    $titles[]= $categories[$i]['categorie'];
   

    $produits[]=$connexionBdd->getData("SELECT * FROM `produits` WHERE `id_categorie`=(:id_categorie) ORDER BY id LIMIT 2 ", [":id_categorie"=>$categories[$i]['id']]);
}

$smarty->assign('titles',$titles); }

if (isset($_GET["article"]) && !empty($_GET["article"])) {
  $produits = $connexionBdd->getData("SELECT * FROM `produits` WHERE produits.id = (:idproduit)  ", [":idproduit"=>$_GET['article']]);
  
}

if (isset($_GET["categorie"]) && !empty($_GET["categorie"])) {
    $produits = $connexionBdd->getData("SELECT * FROM `produits`  WHERE `id_categorie`=(:id_categorie) ", [":id_categorie"=>$_GET['categorie']]);
   
}



if (isset($_GET["marque"]) && !empty($_GET["marque"])) {
    $produits = $connexionBdd->getData("SELECT * FROM `produits`  WHERE `id_marque`=(:id_marque) ", [":id_marque"=>$_GET['marque']]);
   
}

$smarty->assign('categories',$categories);

$smarty->assign('marques',$marques);

$smarty->assign('produits', $produits);

/* $responseJs = json_decode($_GET["id"],true); */
if (isset($_GET["id"]) && !empty($_GET["id"])) {
foreach (json_decode($_GET["id"],true)["products"] as $response){
    $panier[] = $connexionBdd->getData("SELECT * FROM produits WHERE produits.id = (:idproduit)  ", [":idproduit"=>$response]);
    

}

echo json_encode($panier);
}
else {

    $smarty->display('index.master.tpl');
}



?>