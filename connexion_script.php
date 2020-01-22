<?php

require "serveur_connexion.php";

$connx = connexionConditionnelle();

$con=mysqli_connect($connx[0], $connx[1], $connx[2], $connx[3]);

    if(!$con)
    {
        die('Merci de vérifier votre connexion'.mysqli_error());
    }

?>