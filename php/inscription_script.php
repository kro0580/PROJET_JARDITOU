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

?>