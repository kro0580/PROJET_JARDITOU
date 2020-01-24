<?php

// Connexion à la page de connexion avec insertion de l'identifiant et du mot de passe
session_start();
require_once('connexion_bdd.php');

$db = connexionBase();

    if(isset($_POST['login']))
    {
        if(empty($_POST['mail']) || empty($_POST['mot_de_passe']))
        {
            header("location:index.php?Empty= Merci de remplir ces champs");
        }
        else
        {
            $query="SELECT * FROM users WHERE mail='".$_POST['mail']."'";
            $result=$db->query($query);

            if($result)
            {
                $user = $result->fetch(PDO::FETCH_OBJ); 
                if (password_verify($_POST['mot_de_passe'], $user->mot_de_passe))
                {
                $_SESSION['User']=$_POST['mail'];
                header("location:produits_ajout.php");
                }
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