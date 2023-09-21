<?php require('actions/users/signup_action.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <?php include "includes/head.php"; ?>
    <body>
        <div class="login-form">
            <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>'; } ?>
            <form method="POST">
                <h2 class="text-center">Inscription</h2>    
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
                </div>   
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="validate">S'inscrire</button>
                <br><br>
                    <a href="connexion.php"><p>J'ai déjà un compte, je me connecte</p></a>
                </div>   
            </form>
        </div>
    </body>
</html>


