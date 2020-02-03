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

// CONNEXION A LA BDD ET RECUPERATION DES INFORMATIONS AVEC DES REQUETES SQL

require "../connexion_bdd.php";
$db = connexionBase();

$password = $_POST['new_password'];
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
$recup_mail = $_POST['mail']; // $_POST['mail'] recupère le $valeur dans l'input caché mail dans new_mdp.php

$pdoStat = $db->prepare("UPDATE users SET mot_de_passe='".$passwordHash."' WHERE mail='".$recup_mail."'");

$pdoStat->bindValue(':mot_de_passe', $passwordHash, PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $recup_mail, PDO::PARAM_STR);

$InsertIsOk = $pdoStat ->execute();

if($InsertIsOk)
{
    header("Location: ../index.php");
   
}
else
{
    $message = "Echec de la modification du mot de passe";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification du mot de passe</title>
</head>
<body>
    <h1>Modification du mot de passe</h1>
    <p><?php echo $message; ?></p>
</body>
</html>