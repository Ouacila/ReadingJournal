<?php
    require('actions/books/addBook_action.php');   
    require('actions/users/security_action.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Reading journal</title>
</head>
    <body>
    <?php include "includes/navbar.php"; ?>
        <div class="login-form">
            <?php 
            if(isset($errorMsg)){
                echo '<p>'.$errorMsg.'</p>'; 
                }elseif(isset($successMsg)){
                    echo '<p>'.$successMsg.'</p>';
                }
            ?>
            <form method="POST" action="" enctype="multipart/form-data">
                <h2 class="text-center">Ajouter un livre</h2>       
                <div class="form-group">
                    <label for="title" class="form-label">Titre du livre</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="auteur" class="form-label">Auteur(s)/Autrice(s)</label>
                    <textarea type="text" class="form-control" id="auteur" name="auteur"></textarea>
                </div>
                <div class="form-group">
                    <label for="maisonE" class="form-label">Maison d'édition</label>
                    <textarea type="text" class="form-control" id="maisonE" name="maisonE"></textarea>
                </div>
                <div class="form-group">
                    <label for="resume" class="form-label">Résumé</label>
                    <textarea type="text" class="form-control" id="resume" name="resume"></textarea>
                </div>
                <div class="form-group">
                    <label for="photo">photo</label><br>
                    <input type="file" id="photo" name="photo">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="validate">Ajouter</button>
                </div>   
            </form>
        </div>

        <!-- <form action="" method="post" enctype="multipart/form-data">

            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?= $current->nom ?? '' ?>">

            <label for="synopsis" class="form-label">Synopsis</label>
            <input type="textarea" class="form-control" id="synopsis" name="synopsis" value="<?= $current->synopsis ?? '' ?>">

            <label for="img" class="form-label">Poster</label>
            <input type="file" name="img" class="form-control"> -->

            <?php
            // if (isset($current->poster)) {  // si existe $produit['photo'] c'est que nous sommes en train de modifier le produit
            //     echo '<div>Actual photo of the serie</div>';
            //     echo '<div><img src="' . $current->poster . '" style="width: 90px"></div>'; // on affiche la photo actuelle dont le chemin est dans le champ "photo" de la BDD donc dans $produit.
            //     echo '<input type="hidden" name="poster" value="' . $current->poster . '">';  // on crée ce champ caché pour remettre le chemin de la photo actuelle dans le formulaire, donc dans $_POST à l'indice "photo_acutelle". Ainsi on ré-insère ce chemin en BDD lors de la modification.
            // }
            ?>

            <br><br>

            <!-- <a href="?ob=list" class="btn btn-warning">Retour</a> 
            <input type="submit" class="btn btn-primary" value="Enregistrer"> -->

    </body>
</html>

