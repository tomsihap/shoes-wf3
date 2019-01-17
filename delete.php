<?php
// delete.php

var_dump(    intval($_GET['id']) ) ;

$host       = 'localhost'; // Hôte de la base de données
$dbname     = 'phpcourse'; // Nom de la bdd
$port       = '3308'; // Ou 3308 selon la configuration
$login      = 'root'; // Par défaut dans WAMP
$password   = ''; // Par défaut dans WAMP (pour MAMP : 'root')

try {
    // Essaie de faire ce script...
    $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;port='.$port, $login, $password);
}
catch (Exception $e) {
    // Sinon, capture l'erreur et affiche la
    die('Erreur : ' . $e->getMessage());
}

if (empty($_GET['id'])) {
    echo "Attention, il faut fournir un ID d'élément à supprimer.";
}

elseif (intval($_GET['id']) <= 0 ) {
    echo "Attention, l'ID doit être un entier valide.";
}

else {
    echo "L'id est correct !<br>";

    // Je met ma requête dans une variable
    $requete = "DELETE FROM shoes WHERE id = " . $_GET['id'];

    // J'execute immédiatement la requête sans garder le résultat dans une variable.
    // En effet, comme ce n'est pas un SELECT, je n'ai pas de résultat retourné.
    $bdd->query($requete);

    echo "<a href='list.php'>Retour</a>";
}