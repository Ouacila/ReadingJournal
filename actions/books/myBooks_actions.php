<?php
require('actions/database.php');

$getAllMyBooks = $bdd->prepare('SELECT * FROM Books WHERE id_profil = ?');
$getAllMyBooks->execute(array($_SESSION['id']));

?>