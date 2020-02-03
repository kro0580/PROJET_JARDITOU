<?php

// GESTION DES MESSAGES D'ERREUR

// Initialisation d'un tableau d'erreur

$aErreur = [];

// NOM

if(empty ($_POST["nom"]))
{
    $aErreur[] = "erreur1=true";
}
else if(!preg_match("/^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/",($_POST["nom"])))
{
    $aErreur[] = "erreur1b=true";
}
else
{
    echo "Nom : ". $_POST["nom"] . "<br>";
}

// PRENOM

if(empty ($_POST["prenom"]))
{
    $aErreur[] = "erreur2=true";
}
else if(!preg_match("/^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/",($_POST["prenom"])))
{
    $aErreur[] = "erreur2b=true";
}
else
{
    echo "Prénom : ". $_POST["prenom"] . "<br>";
}

// EMAIL

if(empty ($_POST["email"]))
{
    $aErreur[] = "erreur3=true";
}
else if (!preg_match("/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,252}\.[a-z]{2,4}$/",($_POST["email"])))
{
    $aErreur[] = "erreur3b=true";
}
else
{
    echo "Votre email est : ". $_POST["email"] . "<br>";
}

// LOGIN

if(empty ($_POST["identifiant"]))
{
    $aErreur[] = "erreur4=true";
}
else if (!preg_match("/^[a-zA-Z0-9]+$/",($_POST["identifiant"])))
{
    $aErreur[] = "erreur4b=true";
}
else
{
    echo "Votre login est : ". $_POST["identifiant"] . "<br>";
}

// PASSWORD

if(empty ($_POST["password"]))
{
    $aErreur[] = "erreur5=true";
}
else if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/",($_POST["password"])))
{
    $aErreur[] = "erreur5b=true";
}
else
{
    echo "Votre mot de passe est : ". $_POST["password"] . "<br>";
}

// CONFIRMATION PASSWORD

if(empty ($_POST["conf_password"]))
{
    $aErreur[] = "erreur6=true";
}
else if (($_POST["conf_password"]) !== ($_POST["password"]))
{
    $aErreur[] = "erreur6b=true";
}
else
{
    echo "Votre confirmation de mot de passe est : ". $_POST["conf_password"] . "<br>";
}

// Initialisation d'une condition pour que toutes les erreurs apparaissent en même temps
if (!empty($aErreur)) // Si le tableau n'est pas vide
{
    $sUrl = implode("&", $aErreur); // Alors on regroupe toutes les erreurs
    header("Location:../inscription.php?".$sUrl); // On affiche les erreurs dans le formulaire formulaire.php
    exit; // Arrêt de la condition
}

// CONNEXION A LA BDD ET RECUPERATION DES INFORMATIONS AVEC DES REQUETES SQL

require "../connexion_bdd.php";
$db = connexionBase();

date_default_timezone_set('Europe/Paris'); // Pour récupérer l'heure locale
$date = date("Y-m-d H:i:s");

$password = $_POST['password'];

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$pdoStat = $db ->prepare("INSERT INTO users(nom, prenom, mail, identifiant, mot_de_passe, date_inscription, acces)
VALUES(:nom, :prenom, :mail, :identifiant, :mot_de_passe, '".$date."', :acces)");

$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $_POST['email'], PDO::PARAM_STR);
$pdoStat->bindValue(':identifiant', $_POST['identifiant'], PDO::PARAM_STR);
$pdoStat->bindValue(':mot_de_passe', $passwordHash, PDO::PARAM_STR);
$pdoStat->bindValue(':acces', "user", PDO::PARAM_STR);

$InsertIsOk = $pdoStat ->execute();

if($InsertIsOk)
{
    header("Location: ../accueil.php");
}
else{
    $message = "Echec de l'insertion";
}

// Envoi mail de confirmation sur MAILHOG
// Télécharger MailHog_windows_amd64.exe à l'adresse https://github.com/mailhog/MailHog/releases
// Aller dans php.ini de Laragon - ligne 1047 et 1067
//[mail function] http://php.net/smtp SMTP = localhost http://php.net/smtp-port smtp_port = 1025
// sendmail_path="C:/laragon/mailhog/mailhog.exe sendmail" (mettre l'application mailhog dans le dosser mailhog que l'on doit créer)
// mail.log = "C:/laragon/logs/mails.log" (journal des mails envoyés)
// Aller sur Mailhog à l'adresse suivante : http://localhost:8025/# - puis cliquer sur connected

// fonction mail(destinataire, objet, message, entêtes, paramètres) : tableau avec des paramètres
if($_POST) // Si on envoi quelque chose alors cela déclenche l'envoi du mail
{
    $aHeaders = array('MIME-Version' => '1.0','Content-Type' => 'text/html; charset=utf-8','From' => $_POST['nom'] . " " . $_POST['prenom'],'Reply-To' => 'Service commercial <commerciaux@jarditou.com>','X-Mailer' => 'PHP/' . phpversion());

    $message2 = "<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Mon premier mail HTML</title>   
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
          <h1>Bienvenue parmi nous</h1>
      </div>    
    </div>   
    <div class='row'>
        <div class='col-12'>
          Félicitations, votre inscription a bien été prise en compte
      </div>    
    </div>   
</div> 
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
</body>
</html>";
}

mail($_POST['email'], "Confirmation d'inscription",$message2,$aHeaders);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation d'inscription</title>
</head>
<body>
    <h1>Confirmation d'inscription</h1>
    <p><?php echo $message; ?></p>
</body>
</html>