<?php

// Connexion à la page de connexion avec insertion de l'identifiant et du mot de passe
session_start(); // A mettre chaque fois que l'on utilise $_SESSION
require_once('connexion_bdd.php');

$db = connexionBase(); // Appel de la fonction de connexion à la BDD

// Compteur de nbre de tentative
if (!isset($_SESSION['limitation'])) 
   { 
    $_SESSION['limitation'] = 1; 
   } 
else { 
    $_SESSION['limitation'] = $_SESSION['limitation'] +1; 
     }   
     
// Test du nombre d'essai 
if ((isset($_SESSION['limitation'])) && ($_SESSION['limitation'] <= 3)) 
{ 
header('Location: index.php');
}
else
{     
echo 'Trop de tentatives';
}


if(isset($_POST['login']))
    {
        if(empty($_POST['mail']) || empty($_POST['mot_de_passe'])) // Vérifie les conditions
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
                if (password_verify($_POST['mot_de_passe'], $user->mot_de_passe)) // Vérifier que le mot de passe saisi par l'utilisateur est le même que celui crypté stocké en BDD
                {
                $_SESSION['User']=$_POST['mail']; 
                if($user->acces=='admin') // Si l'utilisateur est un Admin alors il peut avoir accès au bouton "ajouter un produit" (voir entete.php) et "supprimer un produit" (voir detail.php)
                {
                $_SESSION['Admin']=$user->acces; 
                }
                header("location:accueil.php");
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