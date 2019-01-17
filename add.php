<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Inventory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
        

            <form action="save.php" method="post" enctype="multipart/form-data">
                <label for="shoesMarque">Marque</label>
                <select class="form-control" name="marque" id="shoesMarque" required>
                    <option value="Adidas">Adidas</option>
                    <option value="Kickers">Kickers</option>
                    <option value="Nike">Nike</option>
                    <option value="Reebok">Reebok</option>
                </select>

                <label for="shoesModele">Modèle</label>
                <input class="form-control" type="text" name="modele" id="shoesModele" required>

                <label for="shoesQuantite">Quantité</label>
                <input class="form-control" type="number" name="quantite" max="65000" id="shoesQuantite" required>

                <label for="shoesStyle">Style</label>
                <select class="form-control" name="style" id="shoesStyle">
                    <option disabled selected>Veuillez choisir un style...</option>
                    <option value="mariage">Mariage</option>
                    <option value="ville">Ville</option>
                    <option value="sportswear">Sportswear</option>
                </select>

                <label for="shoesPrix">Prix</label>
                <input class="form-control" type="range" name="prix" id="shoesPrix" min="0" step="0.01">

                <label for="shoesTaille">Taille</label>
                <input class="form-control" type="number" name="taille" id="shoesTaille" min="10" max="100">

                <label for="shoesFermeture">Fermeture</label>

                <div class="form-check">
                    <input id="eclairRadio" type="radio" name="fermeture" value="eclair">
                    <label class="form-check-label" for="eclairRadio">
                        Fermeture éclair
                    </label>
                    </div>
                    <div class="form-check">
                    <input id="lacetsRadio" type="radio" name="fermeture" value="lacets">
                    <label class="form-check-label" for="lacetsRadio">
                        Lacets
                    </label>
                    </div>
                    <div class="form-check disabled">
                    <input id="scratchRadio" type="radio" name="fermeture" value="scratch">
                    <label class="form-check-label" for="scratchRadio">
                        Scratch
                    </label>
                </div>


                <label for="shoesImage">Photo</label>
                <input type="file" name="imageChaussure" id="shoesImage" class="form-control">

                <button class="btn btn-success" type="submit">Envoyer</button>
            </form>
    
        </div>
    </div>
</div>
</body>
</html>