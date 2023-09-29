<?php

require('actions/database.php');

//on récupère tous les livres de la bdd avec une limite d'affichage 
$getAllBooks = $bdd->query('SELECT * FROM Books ORDER BY id_book DESC LIMIT 15');

//on vérifie si une recherche a été faite
if(isset($_GET['search']) && !empty($_GET['search'])){
    
    $userSearch = $_GET['search'];

    //ici on récupère les livres qui ont comme titre quelque chose qui ressemble à la recherche
    $getAllBooks = $bdd->query('SELECT * FROM Books WHERE title LIKE "%'.$userSearch.'%" ORDER BY id_book DESC');
}

?>