<?php
include("entete.php");
require "connexion_bdd.php";
$db = connexionBase();
$result = $db->query("SELECT * FROM categories ORDER BY cat_id"); // Requête pour avoir les cat_id
$categories = $result->fetchAll(PDO::FETCH_OBJ);

date_default_timezone_set('Europe/Paris');
$date = date("d-m-Y H:i:s");
?>

<div class="row">

<form class="col-lg-12" action="php/produits_ajout_script.php" method="post">

<!--<div class="form-group">
    <label for="id">ID :</label>
    <select name="pro_id" id="pro_id"></select>
</div>-->

<div class="form-group">
    <label for="référence">Référence :</label>
    <input type="text" class="form-control" name="reference" id="reference"> <!-- Le name et l'id doivent être identiques --> 
</div>

<div class="form-group">
    <label for="pro_cat_id">Catégorie :</label>
    <select class="custom-select" name="pro_cat_id" id="pro_cat_id">
    <?php
    foreach($categories as $c) // Permet l'affichage du menu déroulant pour obtenir la liste des catégories
    {
        ?>
        <option value = "<?= $c->cat_id?>"> <?=$c->cat_id."-".$c->cat_nom?></option>
        <?php
    }
    ?>
    
</select>
</div>

<div class="form-group">
    <label for="libellé">Libellé :</label>   
    <input type="text" class="form-control" name="libelle" id="libelle">  
</div>

<div class="form-group">
    <label for="description">Description :</label>
    <input type="text" class="form-control" name="description" id="description">   
</div>

<div class="form-group">
    <label for="prix">Prix :</label> 
    <input type="text" class="form-control" name="prix" id="prix">     
</div>

<div class="form-group">
    <label for="stock">Stock :</label>  
    <input type="text" class="form-control" name="stock" id="stock">  
</div>

<div class="form-group">
    <label for="couleur">Couleur :</label>
    <input type="text" class="form-control" name="couleur" id="couleur">   
</div>


<p>Produit bloqué ? :</p>

<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="bloque_oui" name="bloque" value = 1> <!-- On récupère la valeur 1 quand le produit est bloqué -->
  <label class="form-check-label" for="bloque">Oui</label>
</div>

<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="bloque_non" name="bloque" value = 0> <!-- On récupère la valeur 0 quand le produit n'est pas bloqué -->
  <label class="form-check-label" for="bloque">Non</label>
</div>

</div><br>

<div class="form-group">
    <label for="ajout">Date d'ajout :</label>
    <input type="text" class="form-control" id="ajout" name="ajout" value ="<?=$date?>" readonly>  <!-- On récupère la date du jour : value ="<?=$date?> que l'on met en readonly pour empêcher toute modification -->
</div>

<div class="form-group">
    <input type="submit" class="btn btn-success" value="Envoyer" id="bouton_envoi">
    <input type="reset" class="btn btn-danger" value="Annuler">
</div>

</form>

<?php
include("pieddepage.php");
?>