<?php

require('actions/database.php');

$getAllMyDatas = $bdd->prepare('SELECT * FROM trackingJanvier WHERE id_profil = ? ');
$getAllMyDatas->execute(array($_SESSION['id']));
?>