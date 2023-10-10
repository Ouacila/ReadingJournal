<?php

require('actions/database.php');

$idBook = $_GET['id_book'];

$getAllAvisOfABook = $bdd->prepare('SELECT * FROM avis WHERE id_book = ? ORDER BY id_avis DESC');
$getAllAvisOfABook->execute(array($idBook));
?>