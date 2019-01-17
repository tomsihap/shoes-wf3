<?php

// var_dump($_GET);

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

$requete = "SELECT * FROM shoes WHERE id = " . $_GET['chaussure'];

$res = $bdd->query($requete);

$shoe = $res->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $shoe['marque'] ?> - <?= $shoe['modele'] ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    <li>Marque : <?= $shoe['marque']; ?></li>
                    <li>Modèle : <?= $shoe['modele']; ?></li>
                    <li>Quantité : <?= $shoe['quantite']; ?></li>
                    <li>Style : <?= $shoe['style']; ?></li>
                    <li>Prix : <?= $shoe['prix']; ?></li>
                    <li>Taille : <?= $shoe['taille']; ?></li>
                    <li>Fermeture : <?= $shoe['fermeture']; ?></li>
                </ul>

                <a href="list.php">Retour à la liste</a>
            </div>
        </div>
    </div>
</body>
</html>
