<?php
require "../connexion_bdd.php";
$db = connexionBase();
//$objetPdo = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou', 'root', '');
date_default_timezone_set('Europe/Paris'); // Toujours le datetime avant la variable $date
$date = date("Y-m-d H:i:s");
//$pro_cat_id = $_POST["pro_cat_id"];
//$pro_id = $_POST["pro_id"];

$pdoStat = $db->prepare("UPDATE produits SET pro_ref=:pro_ref, pro_cat_id=:pro_cat_id, pro_libelle=:pro_libelle, pro_description=:pro_description, 
pro_prix=:pro_prix, pro_stock=:pro_stock, pro_couleur=:pro_couleur, pro_bloque=:pro_bloque, pro_d_modif='".$date."' WHERE pro_id=:pro_id");

$pdoStat->bindValue(':pro_ref', $_POST['reference'], PDO::PARAM_STR);
$pdoStat->bindValue(':pro_cat_id', $_POST['pro_cat_id'], PDO::PARAM_STR);
$pdoStat->bindValue(':pro_libelle', $_POST['libelle'], PDO::PARAM_STR);
$pdoStat->bindValue(':pro_description', $_POST['description'], PDO::PARAM_STR);
$pdoStat->bindValue(':pro_prix', $_POST['prix'], PDO::PARAM_STR);
$pdoStat->bindValue(':pro_stock', $_POST['stock'], PDO::PARAM_STR);
$pdoStat->bindValue(':pro_couleur', $_POST['couleur'], PDO::PARAM_STR);
$pdoStat->bindValue(':pro_id', $_POST['pro_id'], PDO::PARAM_INT);

if ($_POST['bloque']==0) {
    $bloque = NULL;
} else if  ($_POST['bloque']==1) {
    $bloque = 1;
}

$pdoStat->bindValue(':pro_bloque', $bloque, PDO::PARAM_STR);

$InsertIsOk = $pdoStat->execute();

if($InsertIsOk){
    //$message = "Le produit a été modifié dans la base de données";
    header("Location: ../tableau.php"); // Si le produit a bien été modifié, il y a une redirection ver le tableau.php
}
else{
    $message = "Echec de la modification";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation du produit</title>
</head>
<body>
    <h1>Modification du produit</h1>
    <p><?php echo $message; ?></p>
</body>
</html>