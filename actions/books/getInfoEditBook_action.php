<?php
require('actions/database.php');

// vérification si id_book est bien passé en params
if(isset($_GET['id_book']) && !empty($_GET['id_book'])){

    $idBook = $_GET['id_book'];
    //vérification si le livre existe
    $checkBookExists= $bdd->prepare('SELECT * from Books WHERE id_book = ?');// ici on récupère l'id d'un livre
    //qui se trouve dans la table Books qui possède le même id que celui qu'on récupère en params avec le $_GET
    $checkBookExists->execute(array($idBook)); // 
    
    // on vérifie si on récupère une donnée avec row count
    if($checkBookExists->rowCount()>0){
        //infos du livre récupérées et enregistrées dans des variables.
        $bookInfo = $checkBookExists->fetch();
        if($bookInfo['id_profil'] == $_SESSION['id'] OR $_SESSION['id'] == 1 ){

            $book_title = $bookInfo['title'];
            $book_auteur = $bookInfo['auteur'];
            $book_maisonE = $bookInfo['maisonE'];
            $book_resume = $bookInfo['resume'];
            $book_photo = $bookInfo['photo'];
            $book_date = $bookInfo['date_publication'];

            $book_resume = str_replace('<br />', ' ', $book_resume);
            //la fonction str_replace nous permet de remplacer les balises br par des espaces, 
            //les balises <br /> sont mises automatiquement sur la bdd avec la fonction nl2br
        }else {
            $errorMsg = "Vous ne pouvez pas modifier ce livre, vous n'en êtes pas l'auteur";
        }

    }else{
    $errorMsg = "Aucun livre n'a été trouvé !";
    }

}else{
    $errorMsg = "Aucun livre n'a été trouvé";
}