<!DOCTYPE html>
<?php
require ('actions/users/security_action.php');
require ('actions/books/myBooks_actions.php');

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
    <h1>Reading Journal</h1>
    <br />
    <h2>Journal de lecture</h2>
</header>
<body>
    <div class="LiensPagePerso">
        <h4>Navigation :</h4><br>
        <ul class="">
            <li class="">
                <a class="nav-link" href="addBook.php">Ajouter un livre</a><br>
            </li>
            <li class="">
                <a class="nav-link" href="./AllBooks.php">Tous les livres</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/palDuMois.php">Ma Pile à lire</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/wishlist.php">Ma wishlist</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/bookhaul.php">Bookhaul</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/trackerChiffre.php">Tracker de livres lus</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/evolutionPal.php">Évolution de ma pile à lire</a><br>
            </li>
            <li>
                <a class="nav-link" href="./actions/users/auteur.php">Auteur/trice préférée</a><br>
            </li>
            <li>
                <a class="nav-link" href="actions/users/logout_action.php">Se déconnecter</a><br>
            </li>
        </ul>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
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
                        <a href="./edit_book.php?id_book=<?= $books['id_book']; ?>" class="btn btn-success">Modifier</a>
                        <a href="./oneBook.php?id_book=<?=$books['id_book']; ?>" class="btn btn-primary">Détails</a>
                        <a href="actions/books/deleteBook_action.php?id_book=<?= $books['id_book']; ?>" class="btn btn-danger">Supprimer</a>
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
            text-align: center;
            padding: 3%;    
            background-color: #7c6d51;

        }
    h1{
        font-size:3.5rem;
        font-family: 'Caveat', cursive;
        color: white;
        text-shadow: black 1px 0 10px;
        }
    h2{
        font-size:2.5rem;
        font-family: 'Caveat', cursive;
        color: white;
        text-shadow: black 1px 0 10px;
    }
        
    .LiensPagePerso{
        margin-right: 5%;
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

