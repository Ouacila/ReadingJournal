<?php
require('actions/database.php');

$getAllMyBooks = $bdd->prepare('SELECT * FROM Books WHERE id_profil = ? ORDER BY id_book DESC');
$getAllMyBooks->execute(array($_SESSION['id']));


?>