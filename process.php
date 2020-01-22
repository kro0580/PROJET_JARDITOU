<?php

// Connexion à la page de connexion avec insertion de l'identifiant et du mot de passe
session_start();
require_once('connexion_script.php');

    if(isset($_POST['login']))
    {
        var_dump($_POST);
        if(empty($_POST['nom']) || empty($_POST['mot_de_passe']))
        {
            header("location:index.php?Empty= Merci de remplir ces champs");
        }
        else
        {
            $query="SELECT * FROM users WHERE nom='".$_POST['nom']."' AND mot_de_passe='".$_POST['mot_de_passe']."'";
            $result=mysqli_query($con, $query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['nom'];
                header("location:produits_ajout.php");
            }
            else
            {
                header("location:index.php?Invalid= Merci de saisir un identifiant ou un mot de passe correct");
            }
        }
    }
    else
    {
        echo 'La connexion a échoué';
    }

?>