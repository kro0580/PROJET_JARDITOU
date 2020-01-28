<?php

$aErreur = [];

// EMAIL

$recup_mail = $_POST['recup_mail'];

if(empty ($recup_mail))
{
    $aErreur[] = "erreur1=true";
}
else if (!preg_match("/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,252}\.[a-z]{2,4}$/",($recup_mail)))
{
    $aErreur[] = "erreur1b=true";
}
else
{
    echo "Votre email est : ". $recup_mail . "<br>";
}

require "../connexion_bdd.php";
$db = connexionBase();
$requete = "SELECT * FROM users WHERE mail=$recup_mail";
var_dump($requete);

$result = $db->query($requete);
var_dump($result);
//$mailExist = $pdoStat ->execute();
$users = $result->fetch(PDO::FETCH_OBJ);

var_dump($users);

if($mailExist){
    //$message = "Le produit a été rajouté dans la base de données";
    $message = "L'adresse mail existe";

    // Initialisation d'une condition pour que toutes les erreurs apparaissent en même temps
    // if (!empty($aErreur)) // Si le tableau n'est pas vide
    // {
        // $sUrl = implode("&", $aErreur); // Alors on regroupe toutes les erreurs
        // header("Location:../recuperation_mdp.php?".$sUrl); // On affiche les erreurs dans le formulaire formulaire.php
        // exit; // Arrêt de la condition
    // }

    if($_POST) // Si on envoi quelque chose alors cela déclenche l'envoi du mail
    {
        $aHeaders = array('MIME-Version' => '1.0','Content-Type' => 'text/html; charset=utf-8','From' => $mailExist,'Reply-To' => 'Service commercial <commerciaux@jarditou.com>','X-Mailer' => 'PHP/' . phpversion());

        $message2 = "<!DOCTYPE html>
    <html lang='fr'>
    <head>
    <meta charset='utf-8'>
    <title>Réinitialisation du mot de passe</title>   
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <style>
    html 
    {
    font-size: 100%;
    }
    
    body 
    {
        font-size: 1rem; /* Si html fixé à 100%, 1rem = 16px = taille par défaut de police de Firefox ou Chrome */
    }
    </style>  
    </head>
    <body>
    <div class='container'>
        <div class='row'>
            <div class='col-12'>
            <h1>Réinitialisation du mot de passe</h1>
        </div>    
        </div>   
        <div class='row'>
            <div class='col-12'>
           <a href='new_mdp.php'>Veuillez cliquer ici pour réinitialiser votre mot de passe</a>
            </div>    
        </div>   
    </div> 
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
    </body>
    </html>";
    }

    mail($recup_mail,"Réinitialisation du mot de passe", $message2, $aHeaders);

    echo $message;

}
else
{
    $message = "L'adresse mail n'existe pas";
}
?>