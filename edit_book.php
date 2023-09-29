<!DOCTYPE html>
<html lang="fr">
    <?php 
    require ('actions/users/security_action.php');
    require ('actions/books/getInfoEditBook_action.php');
    require('actions/books/editBook_action.php');
    ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <title>Reading journal</title>
    </head>
    <header>
        <h1>Modifier le livre : <?= $book_title; ?> ?</h1>
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
            <?php 
                if(isset($book_resume)){
            ?>
                <form method="POST" action="" enctype="multipart/form-data">
                    <!-- <h2 class="text-center">Modifier un livre</h2>        -->
                    <div class="form-group">
                        <label for="title" class="form-label">Titre du livre</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= $book_title; ?>">
                    </div>
                    <div class="form-group">
                        <label for="auteur" class="form-label">Auteur(s)/Autrice(s)</label>
                        <textarea type="text" class="form-control" id="auteur" name="auteur"><?= $book_auteur; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="maisonE" class="form-label">Maison d'édition</label>
                        <textarea type="text" class="form-control" id="maisonE" name="maisonE"><?= $book_maisonE; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="resume" class="form-label">Résumé</label>
                        <textarea type="text" class="form-control" id="resume" name="resume"><?= $book_resume; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="photo">Couverture</label><br>
                        <input type="file" id="photo" name="photo" value="<?= $book_photo; ?>">
                        <img class="image" alt="<?= $book_photo; ?>" src="<?= $book_photo; ?>" style="width:200px; height=250px; float: bottom;"  />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block" name="validate">Modifier le livre</button>
                        <button type="submit" class="btn btn-primary btn-block"><a href="indexPerso.php" class="retour">Abandonner</a></button>
                    </div>   
                </form>
            <?php
            }
            ?>
            
        </div>
    </body>
    <style>
        body{
            background-image: url('assets/fond.png');
            background-size: 100% 150%;
        }
        header{
            display: flex;
            justify-content: center;
            padding: 3%;
        }
        h1{
            font-size:3.5rem;
            font-family: 'Caveat', cursive;
            color: white;
            text-shadow: black 1px 0 10px;

            }
        label{
            font-family: 'Caveat', cursive;
            font-size: 2rem;
            color: white;
            text-shadow: black 1px 0 10px;
        }
        .container{
            width:70%;
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
</html>
