<!DOCTYPE html>
<html lang="fr">
    <?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require ('actions/users/security_action.php');
    require ('actions/books/oneBook_action.php');
    require('actions/books/avis_action.php');
    require('actions/books/addAvis_action.php');
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
        <div class="content">
            <div class="row">
                <div class="details">
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
                        <img src="<?= $book_photo?>" class="card-img-top" style="width:200px; height=250px;" alt="<?= $book_title;?>">
                            <h3><?= $book_title; ?></h3>
                        </div>
                        <div class="card-body">
                            <h4><?= $book_auteur; ?></h4>
                            <h5><?= $book_maisonE; ?></h5>
                            <p>
                                <?= $text = $book_resume; ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <p>Ajouté par: <?= $book_profil; ?></p>
                            <p>Le: <?= $book_date; ?></p>
                        </div>
                </div>
                <br />
                <div class="avisAndForm">
                    <div class="avis">
                        <?php
                        while($avis = $getAllAvisOfABook->fetch()){
                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <h3><?= $avis['pseudo']; ?></h3>
                                </div>
                                <div class="card-body">
                                    <p><?= $text = $avis['avis']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <h3> <?= $avis['note']; ?></h3>
                                </div>
                            </div>
                            <br />
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="commentaires">
                        <h2> Ajouter un avis </h2>
                        <div class="mb-4">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <!-- <h2 class="text-center">Ajouter un livre</h2>        -->
                                <div class="form-group">
                                    <label for="avis" class="form-label">Votre avis: </label>
                                    <br />
                                    <textarea type="text" class="form-control" id="avis" name="avis"></textarea>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <label for="note" class="form-label">Note /5: </label>
                                    <br />
                                    <input step="0.01" min="1" max="5" type="number" id="note" class="note" name="note" />
                                </div>
                                <button type="submit" class="btn btn-success btn-block" name="validate">Valider</button>
                                <button type="submit" class="btn btn-primary btn-block"><a href="./indexPerso.php" class="retour">Retour</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <style>
        body{
            width:100%;
            background-color: #E2D7C1;
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
        .content{
            width: 100%;
        }
        .details {
            align-items:center;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .card{
            width: 80%;
            border: #7c6d51 solid 3px;
        }
        
        .avisAndForm{
            width: 60%;
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