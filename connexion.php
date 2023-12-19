<!DOCTYPE html>
<?php require('actions/users/connexion_action.php'); ?>
<html lang="en">
    <?php include "includes/head.php"; ?>
    <header>
    </header>
    <body>
        <div class="login-form">
                <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>'; } ?>
                <form method="POST">
                    <h2 class="text-center">Connexion</h2>       
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
                        <button type="submit" class="btn btn-primary btn-block" name="validate">Se connecter</button>
                    <br><br>
                    <a href="signup.php"><p>Je n'ai pas encore de compte</p></a>
                    </div>   
                </form>
            </div>
            <style>
            header{
                width: 100%;
                height: 100px;
                background-size:100% 100%;
                top:0%;
                margin:0;
                z-index: 1;
            }
            body{
                background-color: #E2D7C1;
                width:100%;
                margin:0;
            }
        </style>
    </body>
</html>
    