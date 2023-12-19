<!DOCTYPE html>
<?php
require('actions/users/security_action.php');
require('actions/books/trackerChiffre_action.php');
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
        <h1>Tracker Formulaire</h1>
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
                <div class="form-group">
                    <label for="VF" class="form-label">Nombre de livres en Version française:</label>
                    <br />
                    <input   type="number" id="VF" class="VF" name="VF" />
                </div>
                <div class="form-group">
                    <label for="VO" class="form-label">Nombre de livres en Version originales:</label>
                    <br />
                    <input type="number" id="VO" class="VO" name="VO" />
                </div>
                <div class="form-group">
                    <label for="livres" class="form-label">Total de livres lus:</label>
                    <br />
                    <input type="number" id="livres" class="livres" name="livres" />
                </div>
                <div class="form-group">
                    <label for="pages" class="form-label">Total de pages lues: </label>
                    <br />
                    <input type="number" id="pages" class="pages" name="pages" />
                </div>
                <div class="form-group">
                    <label for="papier" class="form-label">Nombre de livres papier: </label>
                    <br />
                    <input type="number" id="papier" class="papier" name="papier" />
                </div>
                <div class="form-group">
                    <label for="ebook" class="form-label">Nombre de livres numérique: </label>
                    <br />
                    <input type="number" id="ebook" class="ebook" name="ebook" />
                </div>
                <div class="form-group">
                    <label for="audio" class="form-label">Nombre de livres audio: </label>
                    <br />
                    <input type="number" id="audio" class="audio" name="audio" />
                </div>
                <br />
                <button type="submit" class="btn btn-success btn-block" name="validate">Valider</button> 
                <button type="submit" class="btn btn-primary btn-block"><a href="indexPerso.php" class="retour">Abandonner</a></button>  
            </form>
        </div>
    </body>
    <style>
        header{
            display: flex;
            justify-content: center;
            padding: 3%;
            background-color: #7c6d51;
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
    </style>
</html>