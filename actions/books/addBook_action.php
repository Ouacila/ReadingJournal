<?php

require('actions/database.php');
if(isset($_POST['validate'])){
    if(!empty($_FILES) && !empty($_POST['title']) && !empty($_POST['auteur']) && !empty($_POST['maisonE']) && !empty($_POST['resume'])){
        $file_tmp = $_FILES['photo']['tmp_name'];
        $file_name = $_FILES['photo']['name'];
        $file_destination = 'actions/books/photos/' . $file_name;
        move_uploaded_file($file_tmp, $file_destination);
        $pseudo = $_SESSION['pseudo'];
        $id_profil = $_SESSION['id'];
        $title = htmlspecialchars($_POST['title']);
        $auteur = htmlspecialchars($_POST['auteur']);
        $maisonE = htmlspecialchars($_POST['maisonE']);
        $resume = nl2br(htmlspecialchars($_POST['resume'])); // on autorise les sauts de ligne avec nl2br;
        $date_publication = date('d/m/Y');

        $insertBook = $bdd->prepare('INSERT INTO Books(pseudo,title, id_profil, auteur, maisonE, resume, photo, date_publication) VALUES (?,?,?,?,?,?,?,?)');
        $insertBook->execute(
            array(
                $pseudo, 
                $title, 
                $id_profil,
                $auteur, 
                $maisonE, 
                $resume, 
                $file_destination,
                $date_publication
            )
        );

        $successMsg = "Le livre a bien été ajouté";
        header('Location: indexPerso.php');

    }else{
        $errorMsg = "Veuillez renseigner tous les champs . . . ";
    }
}

?>