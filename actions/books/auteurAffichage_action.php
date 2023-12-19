<?php
require('actions/database.php');

$getAllMyAuthors = $bdd->prepare('SELECT * FROM auteur WHERE id_profil = ? ORDER BY id DESC');
$getAllMyAuthors->execute(array($_SESSION['id']));

?>