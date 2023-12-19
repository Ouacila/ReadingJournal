<?php
require('actions/database.php');

if(isset($_POST['validate'])){
    //on vérifie si les champs ne sont pas vides
    if(!empty($_POST['title']) && !empty($_POST['auteur']) && !empty($_POST['nbrPages'])){
        //on récupère les différentes données du livre
        $id_profil = $_SESSION['id'];
        $title = htmlspecialchars($_POST['title']);
        $auteur = htmlspecialchars($_POST['auteur']);
        $nbrPages = htmlspecialchars($_POST['nbrPages']);
        $date_ajout = date('d/m/Y');

        //on insère les données précédentes dans la BDD 
        $insertBook = $bdd->prepare('INSERT INTO wishlist (id_profil,title, auteur, nbrPages, date_ajout) VALUES (?,?,?,?,?)');
        $insertBook->execute(
            array(
                $id_profil, 
                $title,  
                $auteur,
                $nbrPages,
                $date_ajout
            )
        );

        $successMsg = "Le livre a bien été ajouté";
    }else{
        $errorMsg = "Veuillez renseigner tous les champs . . . ";
    }
}
?>