<?php
require('actions/database.php');

if(isset($_POST['validate'])){
    //on vérifie si les champs ne sont pas vides
    if(!empty($_FILES) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['dates'])){
        //on récupère les différentes données du livre
        $file_tmp = $_FILES['photo']['tmp_name']; // on récupère le nom de la couverture du livre
        $file_name = $_FILES['photo']['name'];//
        $file_destination = 'actions/books/auteur/' . $file_name;
        move_uploaded_file($file_tmp, $file_destination);
        $id_profil = $_SESSION['id'];
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $date_carriere = htmlspecialchars($_POST['dates']) ;

        //on insère les données précédentes dans la BDD 
        $insertBook = $bdd->prepare('INSERT INTO auteur (id_profil, nom, prenom, photo, date_carriere) VALUES (?,?,?,?,?)');
        $insertBook->execute(
            array(
                $id_profil, 
                $nom,  
                $prenom,
                $file_destination,
                $date_carriere
            )
        );

        $successMsg = "L'auteur ou l'autrice a bien été ajouté";
    }else{
        $errorMsg = "Veuillez renseigner tous les champs . . . ";
    }
}


?>