<?php
require('actions/database.php');

if(isset($_POST['validate'])){
    //on vérifie si les champs ne sont pas vides
    if(!empty($_FILES) && !empty($_POST['title']) && !empty($_POST['prix'])){
        //on récupère les différentes données du livre
        $file_tmp = $_FILES['photo']['tmp_name']; // on récupère le nom de la couverture du livre
        $file_name = $_FILES['photo']['name'];//
        $file_destination = 'actions/books/photos/' . $file_name;
        move_uploaded_file($file_tmp, $file_destination);
        $id_profil = $_SESSION['id'];
        $title = htmlspecialchars($_POST['title']);
        $prix = htmlspecialchars($_POST['prix']);
        $date_ajout = date('d/m/Y');

        //on insère les données précédentes dans la BDD 
        $insertBook = $bdd->prepare('INSERT INTO PàL (id_profil,title, photo, prix, date_ajout) VALUES (?,?,?,?,?)');
        $insertBook->execute(
            array(
                $id_profil, 
                $title,  
                $file_destination,
                $prix,
                $date_ajout
            )
        );

        $successMsg = "Le livre a bien été ajouté";
    }else{
        $errorMsg = "Veuillez renseigner tous les champs . . . ";
    }
}

?>