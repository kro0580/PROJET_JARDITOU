<?php

require "../connexion_bdd.php";
$db = connexionBase();

date_default_timezone_set('Europe/Paris'); // Pour récupérer l'heure locale
$date = date("Y-m-d H:i:s");

$pdoStat = $db ->prepare("INSERT INTO users(nom, prenom, mail, identifiant, mot_de_passe, date_inscription, der_connexion)
VALUES(:nom, :prenom, :mail, :identifiant, :mot_de_passe, '".$date."', '".$date."')");

$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $_POST['email'], PDO::PARAM_STR);
$pdoStat->bindValue(':identifiant', $_POST['identifiant'], PDO::PARAM_STR);
$pdoStat->bindValue(':mot_de_passe', $_POST['password'], PDO::PARAM_STR);

$InsertIsOk = $pdoStat ->execute();

if($InsertIsOk){
    header("Location: ../accueil.php")
}
else{
    $message = "Echec de l'insertion";
}

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

?>