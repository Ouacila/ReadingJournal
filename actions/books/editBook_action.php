<?php
require ('actions/database.php');

//après validation du formulaire
if(isset($_POST['validate'])){
    //si les données sont toutes renseignées
    if(!empty($_FILES) &&!empty($_POST['title']) && !empty($_POST['auteur']) && !empty($_POST['maisonE']) && !empty($_POST['resume'])){

        //les nvlles données à enregistrer
        $file_tmp = $_FILES['photo']['tmp_name']; // on récupère le nom de la couverture du livre
        $file_name = $_FILES['photo']['name']; //
        $newFile_destination = 'actions/books/photos/' . $file_name;
        move_uploaded_file($file_tmp, $newFile_destination);
        $bookNew_title = htmlspecialchars($_POST['title']);
        $bookNew_auteur = htmlspecialchars($_POST['auteur']);
        $bookNew_maisonE = htmlspecialchars($_POST['maisonE']);
        $bookNew_resume = nl2br(htmlspecialchars($_POST['resume']));

        //on modifie les données du livre qui possède l'id renseigné dans les paramètres
        $editBooks = $bdd->prepare('UPDATE Books SET title = ?, auteur = ?, maisonE = ?, resume = ?, photo = ? WHERE id_book = ?');
        $editBooks->execute(array($bookNew_title, $bookNew_auteur, $bookNew_maisonE, $bookNew_resume, $newFile_destination, $idBook));

        //on redirige automatiquement vers le dashboard de la personne
        header('Location: indexPerso.php');


    }else{
        $errorMsg = "Veuillez remplir tous les champs";
    }
}