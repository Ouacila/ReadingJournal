<?php
require('actions/database.php');

//si on a bien valider avec le bouton
if(isset($_POST['validate'])){

    if(!empty($_POST['avis']) &&  !empty($_POST['note'])){

        $user_avis = nl2br(htmlspecialchars($_POST['avis']));
        $user_note = htmlspecialchars($_POST['note']);

        $insertAvis = $bdd->prepare('INSERT INTO avis (id_profil, pseudo, id_book, avis, note) VALUES (?, ?, ?, ?, ?)');
        $insertAvis->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idBook, $user_avis, $user_note));


    }
}

?>