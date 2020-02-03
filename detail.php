<?php 

include("entete.php"); // Inclusion de l'en-tête construite dans le fichier entete.php
require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
 
$db = connexionBase(); // Appel de la fonction de connexion
$pro_id = $_GET["pro_id"];
$requete = "SELECT * FROM produits INNER JOIN categories ON categories.cat_id = produits.pro_cat_id WHERE pro_id=".$pro_id; // Construction de la requête SQL
$result = $db->query($requete); // $db->query($requete) revient à appeler la fonction query() de l'objet $db en lui passant la requête SQL en argument. Le résultat $db->query() est stocké dans un objet $result.
$produit = $result->fetch(PDO::FETCH_OBJ); // Renvoi de l'enregistrement sous forme d'un objet
    
?>

<div class="row">

<form class="col-lg-12" action="php/produits_ajout_script.php" method="post"> <!-- Action vers le fichier php ou on écrit le script à exécuter en méthode POST -->

<div class="text-center">

<img src="images/jarditou_photos/<?=$produit->pro_photo?>" width="300" alt="produit"> <!-- Pour ajouter la photo du produit : width="300 permet de redimensionner la photo et en n'indiquant qu'un seul paramètre le navigateur se charge de calculer le deuxième c'est à dire height en conservant les proportions de départ -->
</div>

<div class="form-group">
    <label for="référence">Référence :</label>
    <input type="text" class="form-control" name="reference" value ="<?=$produit->pro_ref?>" id="reference" readonly> <!-- Dans value, on récupère la valeur de la référence et readonly pour avoir en lecture seule -->  
</div>

<div class="form-group">
    <label for="categorie">Catégorie :</label>
    <input type="text" class="form-control" name="categorie" value ="<?=$produit->cat_nom?>" id="categorie" readonly>
</div>

<div class="form-group">
    <label for="libellé">Libellé :</label>   
    <input type="text" class="form-control" name="libelle" value ="<?=$produit->pro_libelle?>" id="libelle" readonly>  
</div>

<div class="form-group">
    <label for="description">Description :</label>
    <textarea class="form-control" name="description" value placeholder ="<?=$produit->pro_description?>" id="description" readonly></textarea>
</div>

<div class="form-group">
    <label for="prix">Prix :</label>  
    <input type="text" class="form-control" name="prix" value ="<?=$produit->pro_prix?>" id="prix" readonly>       
</div>

<div class="form-group">
    <label for="stock">Stock :</label>
    <input type="text" class="form-control" name="stock" value ="<?=$produit->pro_stock?>" id="stock" readonly> 
</div>

<div class="form-group">
    <label for="couleur">Couleur :</label> 
    <input type="text" class="form-control" name="couleur" value ="<?=$produit->pro_couleur?>" id="couleur" readonly>  
</div>


<p>Produit bloqué ? :</p>

<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" value ="<?=$produit->pro_bloque?>" id="bloque_oui" name="bloque" disabled <?php if ($produit->pro_bloque == 1) { echo "checked"; } ?>> <!-- disabled pour avoir en lecture seule et on indique une condition si la valeur récupérée est 1 alors on coche -->
  <label class="form-check-label" for="bloque">Oui</label>
</div>

<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" value ="<?=$produit->pro_bloque?>" id="bloque_non" name="bloque" disabled <?php if (is_null($produit->pro_bloque)) { echo "checked"; } ?>>
  <label class="form-check-label" for="bloque">Non</label>
</div>

</div><br>

<div class="form-group">
    <label for="ajout">Date d'ajout :</label> 
    <input type="text" class="form-control" name="ajout" value ="<?=$produit->pro_d_ajout?>" id="ajout" readonly> 
</div>

<div class="form-group">
    <label for="modif">Date de modification :</label> 
    <input type="text" class="form-control" name="modif" value ="<?=$produit->pro_d_modif?>" id="modif" readonly>
</div>

<div class="form-group">
    <!-- Quand on clique sur le bouton retour on affiche le tableau -->
    <a href="tableau.php" class="btn btn-dark m-0">Retour</a>
    
    <?php
    if(isset($_SESSION["Admin"]))
        {
        ?>
        <!-- Quand on clique sur le bouton modifier on exécute le script du fichier sur lequel on fait un lien et on récupère l'ID avec ?pro_id=<?= $produit->pro_id?> -->
         <a href="produits_modif.php?pro_id=<?= $produit->pro_id?>" class="btn btn-warning m-0">Modifier</a>
         <!-- Quand on clique sur le bouton supprimer on exécute le script du fichier sur lequel on fait un lien et on récupère l'ID avec ?pro_id=<?= $produit->pro_id?> -->
        <a href="php/produits_supprimes_script.php?pro_id=<?= $produit->pro_id?>" class="btn btn-danger m-0" onclick="return confirm('Etes-vous certain(e) de vouloir supprimer le produit ?')">Supprimer</a>
        <?php
        }
    ?>
</div>

</form>

<?php
include("pieddepage.php"); // Inclusion du pied de page
?>