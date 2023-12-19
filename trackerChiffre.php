<!DOCTYPE html>
<?php
require('actions/users/security_action.php');
require('actions/books/trackerChiffre_action.php');
require('actions/books/trackerShowJanvier_action.php');
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <title>Reading journal</title>
    </head>
    <header>
        <h1>Tracker</h1>
    </header>
    <body>
        <div class="container">
            <table>
                <thead>
                    <tr>
                    <th></th>
                    <th colspan=1> VF </th>
                    <th colspan=1> VO </th>
                    <th colspan=1> Livres </th>
                    <th colspan=1> Pages </th>
                    <th colspan=1> Papier </th>
                    <th colspan=1> Audio </th>
                    <th colspan=1> E-book </th>
                    <th colspan=1> Edit </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Janvier</td>
                        <?php
                            while($data = $getAllMyDatas->fetch()){     
                        ?>
                        <td> <?= $data['VF']; ?> </td>
                        <td> <?= $data['VO']; ?> </td>
                        <td> <?= $data['livres']; ?> </td>
                        <td> <?= $data['pages']; ?> </td>
                        <td> <?= $data['papier']; ?> </td>
                        <td> <?= $data['audio']; ?> </td>
                        <td> <?= $data['ebook']; ?> </td>
                        <?php
                            }
                        ?>
                        <td><a href="./trackerForm.php?month=janvier" class="btn"> 🖋️ </a></td>
                    </tr>
                    <tr>
                        <td>Février</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><a href="./trackerForm.php?month=fevrier" class="btn"> 🖋️ </a></td>
                    </tr>
                    <tr>
                        <td>Mars</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><button type="submit" class="btn btn-block" name="validate"> 🖋️ </button></td>
                    </tr>
                    <tr>
                        <td>Avril</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><button type="submit" class="btn btn-block" name="validate"> 🖋️ </button></td>
                    </tr>
                    <tr>
                        <td>Mai</td>
                        <td> </td><td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><button type="submit" class="btn btn-block" name="validate"> 🖋️ </button></td>
                    </tr>
                    <tr>
                        <td>Juin</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><button type="submit" class="btn btn-block" name="validate"> 🖋️ </button></td>
                    </tr>
                    <tr>
                        <td>Juillet</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><button type="submit" class="btn btn-block" name="validate"> 🖋️ </button></td>
                    </tr>
                    <tr>
                        <td>Aout</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><button type="submit" class="btn btn-block" name="validate"> 🖋️ </button></td>
                    </tr>
                    <tr>
                        <td>Septembre</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><button type="submit" class="btn btn-block" name="validate"> 🖋️ </button></td>
                    </tr>
                    <tr>
                        <td>Octobre</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><button type="submit" class="btn btn-block" name="validate"> 🖋️ </button></td>
                    </tr>
                    <tr>
                        <td>Novembre</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><button type="submit" class="btn btn-block" name="validate"> 🖋️ </button></td>
                    </tr>
                    <tr>
                        <td>Décembre</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><button type="submit" class="btn btn-block" name="validate"> 🖋️ </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <style>
            header{
                display: flex;
                justify-content: center;
                padding: 3%;
                background-color: #7c6d51;
            }
            h1{
                font-size:3.5rem;
                font-family: 'Caveat', cursive;
                color: white;
                text-shadow: black 1px 0 10px;
            }
            body{
                background-color: #E2D7C1;
                width:100%;
                margin:0;
                z-index: 0;  
            }
            .container{
                width: 60%;
                margin:auto;
                padding-top: 5%;  
            }
            table{
                border: 1px solid black;
                text-align: center;
            }
            td {
                border: 1px solid black;
                width: 10%;
                background-color: white;
            }
            thead,
            tfoot {
            background-color: grey;
            color: #fff;
            }
        </style>
    </body>
</html>