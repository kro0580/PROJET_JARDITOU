<?php

$aErreur = [];

// PASSWORD

if(empty ($_POST["new_password"]))
{
    $aErreur[] = "erreur1=true";
}
else if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/",($_POST["new_password"])))
{
    $aErreur[] = "erreur1b=true";
}
else
{
    echo "Nouveau mot de passe : ". $_POST["new_password"] . "<br>";
}


// CONFIRMATION PASSWORD

if(empty ($_POST["confirm_password"]))
{
    $aErreur[] = "erreur2=true";
}
else if(($_POST["confirm_password"]) !== ($_POST["new_password"]))
{
    $aErreur[] = "erreur2b=true";
}
else
{
    echo "Confirmation du nouveau mot de passe : ". $_POST["confirm_password"] . "<br>";
}

// Initialisation d'une condition pour que toutes les erreurs apparaissent en même temps
if (!empty($aErreur)) // Si le tableau n'est pas vide
{
    $sUrl = implode("&", $aErreur); // Alors on regroupe toutes les erreurs
    header("Location:../new_mdp.php?".$sUrl); // On affiche les erreurs dans le formulaire formulaire.php
    exit; // Arrêt de la condition
}

?>