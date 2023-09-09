

<?php

$name = (string) './sitemap-copy.xml';
$website = (string) "http://www.guillaume.com/boutique/";


$file = fopen($name, 'w+');

// Genere l'entete du fichier XML
$header = <<<EOF
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
EOF;
fwrite($file, $header);

$priority1 = <<<EOF

<url>
        <loc>$website</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
</url>
EOF;
fwrite($file, $priority1);

require_once("./classes/Database.php");
$database = new Database();
$categories = $database->getData('SELECT `id` FROM `categories` ',array());

foreach ($categories as $categorie) {
$id_categorie = (int) $categorie['id'];
$priority08 = <<<EOF

    <url>
        <loc>$website?categorie=$id_categorie</loc>
        <priority>0.8</priority>
    </url>

EOF;
fwrite($file, $priority08);
}

$produits = $database->getData('SELECT `id` FROM `produits` ',array());

$date = date('Y-m-d').'T'.date("H:i").'Z';

foreach ($produits as $produit) {
$id_produit = (int) $produit['id'];
$priority05 = <<<EOF

<url>
<loc>$website?produit=$id_produit</loc>
<lastmod>$date</lastmod>
<changefreq>weekly</changefreq>
<priority>0.5</priority>
</url>

EOF;
fwrite($file, $priority05);
}




// Genere le pied du fichier XML
$footer = <<<EOF
</urlset>
EOF;
fwrite($file, $footer);

fclose($file);

?>


