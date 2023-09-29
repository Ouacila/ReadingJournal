<?php

session_start();
if(!isset($_SESSION['auth'])){
    header('Location: ../../connexion.php');
}
require ('../database.php');

if(isset($_GET['id_book']) && !empty($_GET['id_book'])){

    $idBook = $_GET['id_book'];

    $checkBookExists = $bdd->prepare('SELECT id_profil FROM Books WHERE id_book = ?');
    $checkBookExists->execute(array($idBook));

    if($checkBookExists->rowCount() > 0){

        $userInfo = $checkBookExists->fetch();
        if($userInfo['id_profil'] == $_SESSION['id'] OR $_SESSION['id'] == 1){

            $deleteOneBook = $bdd->prepare('DELETE FROM Books WHERE id_book = ?');
            $deleteOneBook->execute(array($idBook));

            header('Location: ../../indexPerso.php');

        }else{
            echo "Vous ne pouvez pas supprimer ce livre.";
        }

    }else{
        echo "Aucun livre n'est enregistré!";
    }

}else{
    echo "Aucun livre n'est enregistré"; 
}

?>