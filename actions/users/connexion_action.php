<?php
session_start();
require('actions/database.php');


if(isset($_POST['validate'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])){

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        
        $checkUserExists = $bdd->prepare('SELECT * from users WHERE email = ?');
        $checkUserExists->execute(array($email));

        if($checkUserExists->rowCount() > 0){
            $userInfos = $checkUserExists->fetch();
            if(password_verify($password, $userInfos['password'])){
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInfos['id'];
                $_SESSION['nom'] = $userInfos['nom'];
                $_SESSION['prenom'] = $userInfos['prenom'];
                $_SESSION['pseudo'] = $userInfos['pseudo'];

                header('Location: indexPerso.php ');

            }else{
                $errorMsg = "Votre mot de passe est incorrect";
            }

        }else{
            $errorMsg = "Votre email est incorrect";
        }

        



    }else{
        $errorMsg = "Veuillez compléter tous les champs !";
    }
}

?>