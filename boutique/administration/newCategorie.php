<?php
ini_set("display_errors", 1);
session_start(); // Avoir un acces a la super variable globale $_SESSION
ini_set('post_max_size', '1M');
ini_set('upload_max_filesize', '1M');

$WHITE_LIST = (array) ['jpg', 'jpeg', 'gif', 'png', 'bmp'];
$UPLOADS = (string) '/var/www/html/boutique/assets/img/categories/';


if (
    !empty($_SESSION['user']) and isset($_SESSION['user']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['user'] === $_COOKIE['PHPSESSID'] 
){
 // Permet de recuperer la function replaceorsanitize
 require_once('../functions/replaceOrSanitize.php');
 require_once('../classes/Database.php');
 $connexionBdd = new Database();
 require_once('../classes/Sanitizing.php');
 $sanitizing = new Sanitizing();

if (
    isset($_FILES['imageCategorie']['error']) and $_FILES['imageCategorie']['error'] === 0 and
 
    isset($_POST['creatCategorie']) and !empty($_POST['creatCategorie']) and strlen($_POST['creatCategorie']) <= 25
  
) {
    
    $creerCategorie= (string) replaceOrSanitize($_POST['creatCategorie'], 25, 'N/A');
   

   //////////////////////////////////////////////////////////////////////////
    // retourne un tableau multidimensionnelle
    // la premiere cle est egale a la valeur de l'attribut 'name' de l'input file
    // var_dump($_FILES);
    $image = (string) $_FILES['imageCategorie']['name'];

	// recupere l'extension de l'image
    $extension = (string) pathinfo($image)['extension'];

    // in_array('ceQueJeCherche', ['dansQuoi']);
    if (in_array($extension, $WHITE_LIST)) {
	
	    // recupere le nom de l'image
        $name = (string) pathinfo($image)['filename'];
        
	    // genere une chaine aleatoire alphanumerique
	    $random = (string) bin2hex(random_bytes(32));
        
        // construction du nouveau nom de l'image
        $image = (string) "$name-$random.$extension";
        
        /* 
        deplace le fichier temporaire dans un autre repertoire
        l'autre repertoire doit avoir des permissions www-data
        exemple : sudo chown -R www-data:www-data /var/www/html/uploads/
        et doit avoir obligatoirement un index.php
        exemple : /var/www/html/uploads/index.php
        */

        // move_uploaded_file('source', 'destination');
        move_uploaded_file($_FILES['imageCategorie']['tmp_name'], $UPLOADS . $image);
    }

    else {

        echo "Extension non autorisee.";

    }
    $connexionBdd->getData("INSERT INTO `categories` (`id`, `categorie`, `image_categorie`) VALUES (NULL,(:categorie),(:imgCategorie));",
    [':categorie' => $sanitizing->sanitizeString($creerCategorie),':imgCategorie' => $image]);
////////////////////////////////////////// Insert Article dans BDD////////////////////////////
   /* $connexionBdd->getData("UPDATE `general` SET `title` = (:UPLOADS_BDD)", [":UPLOADS_BDD"=>$UPLOADS_BDD.$image]); */

}

else {

    echo "Echec du telechargement.";

}

 // retourne au navigateur le code HTTP pour preparer une redirection
 http_response_code(302);
 // ajoute dans l'en-tete la destination
 header('Location: ./index.php');
 // arrete l'execution du PHP
 exit(); 

}

else { // si une des condition de la if et elseif est false on rentre donc dans l'instruction de la else
  
    http_response_code(302);
    // ajoute dans l'en-tete la destination
    header('Location: ../');
    // arrete l'execution du PHP
    exit(); 

}
/* isset($_POST['modifFooterTitle']) and !empty($_POST['modifFooterTitle']) and strlen($_POST['modifFooterTitle']) >= 150 */
/* $modifFooter= (string) $_POST['modifFooterTitle']; */ 
?>