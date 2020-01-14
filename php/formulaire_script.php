<?php

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

// SEXE

if(empty ($_POST["customRadio"]))
{
    $aErreur[] = "erreur3=true";
}
else
{
    echo "Vous êtes du sexe : ". $_POST["customRadio"] . "<br>";
}

// DATE DE NAISSANCE

if(empty ($_POST["naissance"]))
{
    $aErreur[] = "erreur4=true";
}
else if(!preg_match("/^([0-2][0-9][0-9][0-9](-)[0-2][0-9](-)[0-3][0-9])$/",($_POST["naissance"]))) 
{
    $aErreur[] = "erreur4b=true";
}
else
{
    echo "Vous êtes né(e) le : ". $_POST["naissance"] . "<br>";
}

// CODE POSTAL

if(empty ($_POST["code_postal"]))
{
    $aErreur[] = "erreur5=true";
}
else if(!preg_match("/^[0-9]{5}$/",($_POST["code_postal"])))
{
    $aErreur[] = "erreur5b=true";
}
else
{
    echo "Votre code postal est le : ". $_POST["code_postal"] . "<br>";
}

// ADRESSE

if(empty ($_POST["adresse"]))
{
    $aErreur[] = "erreur6=true";
}
else if(!preg_match("/[a-zA-ZÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿ]+[^1-9¢ß¥£™©®ª×÷±²³¼½¾µ¿¶·¸º°¯§…¤¦≠¬ˆ¨‰]+/",($_POST["adresse"])))
{
    $aErreur[] = "erreur6b=true";
}
else
{
    echo "Votre adresse est : ". $_POST["adresse"] . "<br>";
}

// VILLE

if(empty ($_POST["ville"]))
{
    $aErreur[] = "erreur7=true";
}
else if (!preg_match("/^[A-zA-ZéèîïÉÈÎÏ][A-zA-Zéèêàçîï]+([-'\s][A-zA-ZéèîïÉÈÎÏ][A-zA-Zéèêàçîï])?([-'\s][A-zA-ZéèîïÉÈÎÏ][A-zA-Zéèêàçîï]+)?$/",($_POST["ville"])))
{
    $aErreur[] = "erreur7b=true";
}
else
{
    echo "Votre ville est : ". $_POST["ville"] . "<br>";
}

// EMAIL

if(empty ($_POST["email"]))
{
    $aErreur[] = "erreur8=true";
}
else if (!preg_match("/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,252}\.[a-z]{2,4}$/",($_POST["email"])))
{
    $aErreur[] = "erreur8b=true";
}
else
{
    echo "Votre email est : ". $_POST["email"] . "<br>";
}

// DEMANDE

if(empty ($_POST["demande"]))
{
    $aErreur[] = "erreur9=true";
}
else
{
    echo "Votre sujet sélectionné est : ". $_POST["demande"] . "<br>";
}

if(empty ($_POST["question"]))
{
    $aErreur[] = "erreur10=true";
}
else
{
    echo "Votre question est la suivante : ". $_POST["question"] . "<br>";
}

// ACCORD

if(empty ($_POST["accord"]))
{
    $aErreur[] = "erreur11=true";
}
else
{
    echo "Vous avez donné votre accord pour le traitement informatique de ce formulaire : ". $_POST["accord"] . "<br>";
}

// Initialisation d'une condition pour que toutes les erreurs apparaissent en même temps
if (!empty($aErreur)) // Si le tableau n'est pas vide
{
    $sUrl = implode("&", $aErreur); // Alors on regroupe toutes les erreurs
    header("Location:../formulaire.php?".$sUrl); // On affiche les erreurs dans le formulaire formulaire.php
    exit; // Arrêt de la condition
}

?>
