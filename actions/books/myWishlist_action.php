<?php
require('actions/database.php');

$getAllMyBooks = $bdd->prepare('SELECT * FROM wishlist WHERE id_profil = ? ORDER BY id DESC');
$getAllMyBooks->execute(array($_SESSION['id']));
?>