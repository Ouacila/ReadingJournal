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
        <h1>Détails</h1>
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
            <div class="card">
                <div class="card-header">
                <img src="<?= $book_photo?>" class="card-img-top" style="width:100px; height=150px;" alt="<?= $book_title;?>">
                    <h3><?= $book_title; ?></h3>
                </div>
                <div class="card-body">
                    <h4><?= $book_auteur; ?></h4>
                    <h5><?= $book_maisonE; ?></h5>
                    <p>
                        <?= $text = $book_resume; ?>
                    </p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </body>
</html>