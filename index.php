<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Reading journal</title>

    
</head>
<body>
    <div class="liens">
        <a class="lien" href="signup.php">Signup</a>
        <a class="lien" href="connexion.php">Connexion</a>
    </div>
</body>
<style>
    body {
    width: 100%;
    margin: auto;
    justify-content: space-around;
    background-image: url('assets/pageAccueil.png');
    background-size: 100% 100%;
    z-index: 0;
    .liens{
        display:flex;
        align-items: end;
        height: 75%;
        float: none;
        justify-content: space-between;
        width: 30%;
        margin: auto;
        .lien{
            font-size: 32px;
            color: black;
            
            
        }
        
        
    }
}
</style>

<?php

require('actions/database.php');


?>