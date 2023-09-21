<!DOCTYPE html>
<?php
session_start();
require('actions/users/security_action.php'); 

echo 'Page personnelle de la personne';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Reading journal</title>
</head>

<div class="LiensPagePerso">
    <ul class="">
        <li class="">
            <a class="nav-link" href="addBook.php">Ajouter un livre</a><br>
        </li>
        <li>
            <a class="nav-link" href="./actions/users/tracker.php">Mon tracker de lectures finies</a><br>
        </li>
        <li>
            <a class="nav-link" href="./actions/users/palDuMois.php">Ma Pile à lire du mois</a><br>
        </li>
        <li>
            <a class="nav-link" href="./actions/users/LectureT.php">Lectures terminées</a><br>
        </li>
        <li>
            <a class="nav-link" href="./actions/users/wishlist.php">Ma wishlist</a><br>
        </li>
        <li>
            <a class="nav-link" href="./actions/users/bookhaul.php">Bookhaul du mois</a><br>
        </li>
        <li>
            <a class="nav-link" href="./actions/users/lectureDuMois.php">Lectures du mois</a><br>
        </li>
        <li>
            <a class="nav-link" href="./actions/users/trackerChiffre.php">Tracker de livres lus</a><br>
        </li>
        <li>
            <a class="nav-link" href="./actions/users/evolutionPal.php">Évolution de ma pile à lire</a><br>
        </li>
        <li>
            <a class="nav-link" href="./actions/users/bestBook.php">Meilleures lectures de l'année</a><br>
        </li>
        <li>
            <a class="nav-link" href="./actions/users/auteur.php">Auteur/trice préférée</a><br>
        </li>
    </ul>
  </div>


