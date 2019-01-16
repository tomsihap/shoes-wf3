<?php


var_dump($_POST);



$host       = 'localhost'; // Hôte de la base de données
$dbname     = 'phpcourse'; // Nom de la bdd
$port       = '3308'; // Ou 3308 selon la configuration
$login      = 'root'; // Par défaut dans WAMP
$password   = ''; // Par défaut dans WAMP (pour MAMP : 'root')
/**
 * Je me connecte à la base de données
 */

try {
    // Essaie de faire ce script...
    $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;port='.$port, $login, $password);
}
catch (Exception $e) {
    // Sinon, capture l'erreur et affiche la
    die('Erreur : ' . $e->getMessage());
}


$marquesValides = ["Adidas", "Kickers", "Nike", "Reebok"];
if(empty($_POST['marque']) ) {
    echo "Le champ marque ne peut pas être vide";
}
elseif( !in_array($_POST['marque'], $marquesValides) ) {
    echo "Pas une marque valide";
}
else {
    $marque = $_POST['marque'];
}

if(empty($_POST['modele']) ) {
    echo "Le champ modele ne peut pas être vide";
}
elseif(strlen($_POST['modele']) > 50) {
    echo "Le modèle doit faire moins de 50 char";
}
else {
    $modele = $_POST['modele'];
}

if(empty($_POST['quantite']) ) {
    echo "Le champ quantite ne peut pas être vide";
}
elseif( intval($_POST['quantite']) <= 0 ) {
    echo "La quantité doit être au moins = à 1";
}
else {
    $quantite = $_POST['quantite'];
}


$stylesValides = ['mariage', 'ville', 'sportswear'];

if(empty($_POST['style']) ) {
    $style = null;
}
elseif(!in_array($_POST['style'], $stylesValides)) {
    echo "Le style n'est pas valide";
}
else {
    $style = $_POST['style'];
}

if(empty($_POST['prix']) ) {
    $prix = null;
}
elseif( !is_numeric($_POST['prix']) ) {
    echo "Le prix n'est pas valide";
}
else {
    $prix = $_POST['prix'];
}

if(empty($_POST['taille']) ) {
    $taille = null;
}
elseif( intval($_POST['taille']) <= 0) {
    echo "La taille est invalide";
}
else {
    $taille = $_POST['taille'];
}

$fermeturesValides = ['eclair','lacets','scratch'];
if(empty($_POST['fermeture']) ) {
    $fermeture = null;
}
elseif( !in_array($_POST['fermeture'], $fermeturesValides )) {
    echo "La fermeture est invalide";
}
else {
    $fermeture = $_POST['fermeture'];
}

if (!$marque || !$modele || !$quantite) {
    echo "Il manque marque ou modele ou qté";

}
else {

    $req = "INSERT INTO shoes(marque, modele, quantite, style, prix, taille, fermeture)
            VALUES(:marque, :modele, :quantite, :style, :prix, :taille, :fermeture)";

    $res = $bdd->prepare($req);

    $res->execute([
        'marque' => $marque,
        'modele' => $modele,
        'quantite' => $quantite,
        'style' => $style,
        'prix' => $prix,
        'taille' => $taille,
        'fermeture' => $fermeture
    ]);
}
