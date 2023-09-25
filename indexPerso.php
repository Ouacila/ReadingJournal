<!DOCTYPE html>
<?php
require ('actions/books/myBooks_actions.php');
require ('actions/users/security_action.php');

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Reading journal</title>
</head>
<header>
</header>
<body>
    <div class="LiensPagePerso">
        <h4>Navigation :</h4><br>
        <ul class="">
            <li class="">
                <a class="nav-link" href="addBook.php">Ajouter un livre</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/tracker.php">Mon tracker de lectures finies</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/palDuMois.php">Ma Pile à lire du mois</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/LectureT.php">Lectures terminées</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/wishlist.php">Ma wishlist</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/bookhaul.php">Bookhaul du mois</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/lectureDuMois.php">Lectures du mois</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/trackerChiffre.php">Tracker de livres lus</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/evolutionPal.php">Évolution de ma pile à lire</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/bestBook.php">Meilleures lectures de l'année</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/auteur.php">Auteur/trice préférée</a><br>
            </li>
        </ul>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-6">
        <?php
            while($books = $getAllMyBooks->fetch()){     
        ?>
            <div class="card">
                <img src="<?= $books['photo'];?>" class="card-img-top" alt="<?= $books['title'];?>">
                <div class="card-body">
                    <h3 class="card-title">Titre: 
                        <?= $books['title']; ?>
                    </h3>
                    <h4 class="card-title"> Auteur: 
                        <?= $books['auteur']; ?>
                    </h4>
                    <h5 class="card-title"> Maison d'édition: 
                        <?= $books['maisonE']; ?>
                    </h5>
                    <p class="card-text">
                        <?php $text = $books['resume'];
                            // echo str_truncate($text, 10).'...';
                            $out = strlen($text) > 150 ? substr($text,0,150)."..." : $text;
                            echo $out;
                        ?>
                    </p>
                    <div class="buttons">
                        <a href="#" class="btn btn-success">Modifier</a>
                        <a href="#" class="btn btn-primary">Détails</a>
                        <a href="#" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
    </div>

</body>
<style>
    body{
        width: 100%;
        margin: 0;
        display: inline;
        background-color: #E2D7C1;
        z-index:0;
    }
    header{
            width: 100%;
            height: 250px;
            background-image: url('assets/header1.png');
            background-size:100% 100%;
            top:0%;
            margin-bottom: 3%;
            z-index: 1;
        }
    .LiensPagePerso{
        float:left;
        width: 12%;
    }
    .row{
        margin-top: 5%;
        display: flex;
        justify-content: space-around;
    }
    .card{
        padding: 0%;
        border: #7c6d51 solid 3px;
        border-radius: 5%;
    }
    .card img{
        margin-top: 5%;
        width: 65%;
    }
    .buttons{
        display: flex;
        justify-content: space-around;
    }
</style>
</html>

