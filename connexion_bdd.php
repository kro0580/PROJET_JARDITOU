<?php

function connexionBase()
{

    if ($_SERVER["SERVER_NAME"] == "dev.amorce.org")
    {

        // Paramètre de connexion serveur
        $host = "localhost";
        $login= "cpotelle";     // Votre loggin d'accès au serveur de BDD 
        $password="cp1980";    // Le Password pour vous identifier auprès du serveur
        $base = "cpotelle";    // La bdd avec laquelle vous voulez travailler 
    }

    if ($_SERVER["SERVER_NAME"] == "localhost")
    {

        // Paramètre de connexion serveur
        $host = "localhost";
        $login= "root";     // Votre loggin d'accès au serveur de BDD 
        $password="";    // Le Password pour vous identifier auprès du serveur
        $base = "jarditou";    // La bdd avec laquelle vous voulez travailler 
    }
 
   try 
   {
        $db = new PDO('mysql:host=' .$host. ';charset=utf8;dbname=' .$base, $login, $password);
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

