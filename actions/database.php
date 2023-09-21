<?php
try {   
    session_start();
    $bdd = new PDO("mysql:host=localhost; dbname=projetReadingJ" ,"root", "root", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e) {
    die('Erreur'.$e->getMessage());
}
