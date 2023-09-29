<?php
    session_start();
    require('actions/books/allBooks_action.php');
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Reading journal</title>
</head>
<div class="container">
    <form method="GET">
        <div class="form-group row">
            <div class="col-8">
                <input type="search" name="search" class="form-control">
            </div>
            <div class="col-4">
                <button class="btn btn-success" type="submit">
                    Rechercher
                </button>
            </div>
        </div>
    </form>
    <br />
    <div class="row row-cols-1 row-cols-md-4 g-5">
        <?php
            while($books = $getAllBooks -> fetch()){
        ?>
            <div class="card">
                <div class="card-header">
                <img src="<?= $books['photo'];?>" class="card-img-top" alt="<?= $books['title'];?>">
                    <h3><?= $books['title']; ?></h3>
                </div>
                <div class="card-body">
                    <h4><?= $books['auteur']; ?></h4>
                    <h5><?= $books['maisonE']; ?></h5>
                    <p>
                        <?php $text = $books['resume'];
                            // echo str_truncate($text, 10).'...';
                            $out = strlen($text) > 150 ? substr($text,0,150)."..." : $text;
                            echo $out;
                        ?>
                    </p>
                </div>
                <div class="card-footer">
                <p>Publié par: <?= $books['pseudo']; ?></p>
                <p>Le : <?= $books['date_publication']; ?></p>
                <a href="#" class="btn btn-primary">Détails</a>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
</div>
<a href="indexPerso.php" class="retour">⬅️⬅️⬅️ Retour</a>
<style>
    body{
        width: 100%;
        margin: 0;
        display: inline;
        background-color: #E2D7C1;
        z-index:0;
        }
    .row{
        margin-top: 5%;
        display: flex;
        justify-content: space-between;
    }
    .card{
        margin: 2%;
        padding: 2%;
        border: #7c6d51 solid 2px;
        border-radius: 5%;
        background: white;
    }
    .card img{
        margin-top: 5%;
    }
    a{
        float:right;
        padding: 5%;
    }
</style>
</html>
