
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de chaussures</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
    
    <ul>
        <li><a href="add.php">Ajouter</a></li>
    </ul>

        <?php

            $host       = 'localhost';  // Hôte de la base de données
            $dbname     = 'phpcourse';  // Nom de la bdd
            $port       = '3308';       // Ou 3308 selon la configuration
            $login      = 'root';       // Par défaut dans WAMP
            $password   = '';           // Par défaut dans WAMP (pour MAMP : 'root')

            try {
                $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;port='.$port, $login, $password);
            }
            catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }

            // Ma requête à la BDD
            $request = 'SELECT * FROM shoes ORDER BY prix DESC';

            // Je questionne (->query()) l'instance de base de données ($bdd) avec ma requête ($request)
            $response = $bdd->query($request);

            // Array qui contiendra les données requêtées
            $shoes = [];

            // Tant que j'arrive à aller chercher (fetch) des lignes qui rentreront dans $donnees :
            while($donnees = $response->fetch() ) {

                // Je met ma ligne ($donnees) dans mon tableau $shoes
                $shoes[] = $donnees;
            }

        ?>

        <table class="table">

            <tr>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Quantité</th>
                <th>Style</th>
                <th>Prix</th>
                <th>Taille</th>
                <th>Fermeture</th>
                <th>Actions</th>
            </tr>
                <?php foreach($shoes as $s) { ?>

                    <tr>
                        <td><?= $s['marque']; ?></td>
                        <td><?= $s['modele']; ?></td>
                        <td><?= $s['quantite']; ?></td>
                        <td><?= $s['style']; ?></td>
                        <td><?= $s['prix']; ?> €</td>
                        <td><?= $s['taille']; ?></td>
                        <td><?= $s['fermeture']; ?></td>
                        <td>
                            <a href="fiche.php?chaussure=<?= $s['id']; ?>" class="btn btn-primary">Voir</a>
                            <a href="delete.php?chaussure=<?= $s['id']; ?>" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>

        </table>

</body>
</html>