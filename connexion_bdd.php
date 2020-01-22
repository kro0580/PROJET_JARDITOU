<?php

require "serveur_connexion.php";

function connexionBase()
{
// Appel de la fonction connexionConditionnelle() qui se trouve dans le fichier serveur_connexion et qui contient les paramètres de connexion au serveur localhost et dev.amorce.org
    $connx = connexionConditionnelle();
 
   try 
   {
        $db = new PDO('mysql:host=' .$connx[0]. ';charset=utf8;dbname=' .$connx[3],$connx[1], $connx[2]);
        return $db;
    } 
    catch (Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Connexion au serveur impossible.');
    } 

}

/*
// On peut utiliser l'alternative suivante mais c'est mieux d'utiliser une fonction
try 
   {        
       $db = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou', 'root', '');
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } 
catch (Exception $e) {
      echo "Erreur : " . $e->getMessage() . "<br>";
      echo "N° : " . $e->getCode();
      die("Fin du script");
}     
*/

?>

