<?php
require('actions/database.php'); 

if(isset($_POST['validate'])){
    echo 'Hello';
    //on vérifie si les champs ne sont pas vides
    if(!empty($_POST['VF']) && !empty($_POST['VO']) && !empty($_POST['livres']) && !empty($_POST['pages']) && !empty($_POST['papier']) && !empty($_POST['ebook']) && !empty($_POST['audio'])){
        $id_profil = $_SESSION['id'];
        $VF = htmlspecialchars($_POST['VF']);
        $VO = htmlspecialchars($_POST['VO']);
        $livres= htmlspecialchars($_POST['livres']);
        $pages = htmlspecialchars($_POST['pages']);
        $papier = htmlspecialchars($_POST['papier']);
        $ebook = htmlspecialchars($_POST['ebook']);
        $audio = htmlspecialchars($_POST['audio']);

        $insertTracker = $bdd->prepare('INSERT INTO trackingJanvier (id_profil, VF, VO, livres, pages, papier, ebook, audio) VALUES (?,?,?,?,?,?,?,?)');
        $insertTracker->execute(
            array(
                $id_profil, 
                $VF,  
                $VO,
                $livres,
                $pages,
                $papier,
                $ebook,
                $audio
            )
        );

        $successMsg = "La ligne a été ajoutée au tracker";
    }else{
        $errorMsg = "Veuillez renseigner tous les champs . . . ";
    }
}
?>