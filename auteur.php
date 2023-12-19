<!DOCTYPE html>
<?php
require ('actions/users/security_action.php');
require ('actions/books/auteur_action.php');
require ('actions/books/auteurAffichage_action.php');
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <title>Reading journal</title>
    </head>
    <header>
        <h1>Auteur, Autrice</h1>
    </header>
    <body>
    <div class="container">
            <?php 
                if(isset($errorMsg)){
                echo '<p>'.$errorMsg.'</p>'; 
                }elseif(isset($successMsg)){
                    echo '<p>'.$successMsg.'</p>';
                }
            ?>
            <form method="POST" action="" enctype="multipart/form-data">
                <!-- <h2 class="text-center">Ajouter un livre</h2>        -->
                <div class="form-group">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="form-group">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label> <br /><br />
                    <input type="file" id="photo" name="photo">
                </div>
                <div class="form-group">
                    <label for="dates" class="form-label">Dates de carrière</label>
                    <input type="text" class="form-control" id="dates" name="dates">
                </div>
                <br />
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" name="validate">Ajouter</button>
                    <button type="submit" class="btn btn-primary btn-block"><a href="./indexPerso.php" class="retour">Retour</a></button>
                </div>   
            </form>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            while($authors = $getAllMyAuthors->fetch()){     
        ?>
            <div class="card">
                <img src="<?= $authors['photo'];?>" class="card-img-top" alt="<?= $authors['nom'];?>">
                <div class="card-body">
                    <h4 class="card-title">
                        <?= $authors['nom']; ?>
                    </h4>
                    <h5 class="card-title"> 
                        <?= $authors['prenom']; ?>
                    </h5>
                    <h6 class="card-title"> 
                        <?= $authors['date_carriere']; ?>
                    </h6>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
    </body>
    <style>
        header{
            display: flex;
            justify-content: center;
            padding: 3%;
            background-color: #7c6d51;
            margin-bottom: 5%;
        }
        h1{
            font-size:3.5rem;
            font-family: 'Caveat', cursive;
            color: white;
            text-shadow: black 1px 0 10px;
            }
        body{
            background-color: #E2D7C1;
            width:100%;
            margin:0;
            z-index: 0;
        }
        .container{
            width: 30%;
            float: left;
            border-right: solid #7c6d51 2px;
        }
        label{
        font-family: 'Caveat', cursive;
        font-size: 2rem;
        color: white;
        text-shadow: black 1px 0 10px;
        }
        a{
        text-decoration: none;
        color: white;
        }
        button{
            box-shadow: 10px 5px 5px black;
            margin: 5%;
        }
    </style>
    </style>
</html>
