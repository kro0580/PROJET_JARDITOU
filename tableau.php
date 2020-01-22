<?php
include("entete.php"); // Inclure l'en-tête dans le fichier tableau.php

// On charge et on utilise la librairie de connexion à la base de données //
// On exécute une requête SQL pour obtenir la liste des enregistrements de la table produits //
// on stocke le résultat de la requête, qui est un tableau d'objets, dans la variable $result //
// 2 conditions; si la variable $result vaut NULL (utilisation du signe ! pour exprimer le contraire) ou n'a pas de résultat (méthode rowCount ligne 20), on affiche un mesage d'erreur pour chaque cas. //
// On ouvre un tableau HTML car les résultats - les informations sur les produits de notre liste - vont être affichés sous cette forme. //
// On débute une boucle while : tant qu'un enregistrement est présent dans la variable $result, on va afficher des informations. La présence d'un enregistrement est vérifiée grâce à la fonction fetch(PDO::FETCH_OBJ) qui lit le premier enregistrement trouvé par la requête SQL, puis le supprime puis lit le suivant et ainsi de suite... Quand il n'y a plus d'enregistrement disponible, elle renvoie la valeur 0, ce qui provoque l'arrêt de la boucle. Il est possible de remplacer l'instruction while par foreach. //
// Le reste de la boucle ne concerne que l'affichage formaté en HTML (ici des lignes et cellules de tableau donc) des informations des produits : pour chaque enregistrement, nous construisons une ligne de tableau contenant une colonne par cellule. //

require "connexion_bdd.php"; // Inclusion de notre bibiothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion : connexion_bdd.php*/

$requete = "SELECT * FROM produits"; // Requête pour sélectionner tous les produits
$result = $db->query($requete); // $db est l'objet retourné par l'appel à PDO, query() est une méthode de cet objet (c'est-à-dire, au sens programmation, une fonction de l'objet). La flèche -> permet d'accéder (appeler) une méthode ou une propriété (attribut) de l'objet.
// $db->query($requete) revient à appeler la fonction query() de l'objet $db en lui passant la requête SQL en argument. Le résultat $db->query() est stocké dans un objet $result.
$produit = $result->fetch(PDO::FETCH_OBJ); // pour lire le contenu de ce résultat (qui pourrait contenir plusieurs lignes), PHP propose la méthode fetch() (= ramener). Ici, la méthode fetch(PDO::FETCH_OBJ) renvoie l'enregistrement sous la forme d'un objet (dont les propriétés contiennent les différents champs), ou FALSE s'il n'y a plus de lignes. Indirectement, cela signifie que vous ne pouvez accéder aux données que par leur nom de colonne et non par leur numéro.

?>

<div class= "row"> <!-- Pour que le tableau soit bien aligné avec la bannière -->

<div class="table-responsive"> <!-- Pour que le tableau soit en responsive -->


<!-- Bordure de tous les côtés de la table et des cellules et ajout de zébrures sur une ligne sur deux du tableau -->
<table class="table table-bordered table-striped">
            <thead align="center">
                    <tr>
                        <th>Photos</th>
                        <th>ID</th>
                        <th>Référence</th>
                        <th>Libellé</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Couleur</th>
                        <th>Ajout</th>
                        <th>Modif</th>
                        <th>Bloqué</th>
                    </tr>
            </thead>
<?php

if (!$result) 
{
    $tableauErreurs = $db->errorInfo();
    echo $tableauErreur[2]; 
    die("Erreur dans la requête");
}
 
if ($result->rowCount() == 0) 
{
   // Pas d'enregistrement
   die("La table est vide");
}

while ($row = $result->fetch(PDO::FETCH_OBJ)) // Renvoi de l'enregistrement sous forme d'un tableau
// on débute une boucle while : tant qu'un enregistrement est présent dans la variable $result, on va afficher des informations. La présence d'un enregistrement est vérifiée grâce à la fonction fetch(PDO::FETCH_OBJ) qui lit le premier enregistrement trouvé par la requête SQL, puis le supprime puis lit le suivant et ainsi de suite... Quand il n'y a plus d'enregistrement disponible, elle renvoie la valeur 0, ce qui provoque l'arrêt de la boucle. Il est possible de remplacer l'instruction while par foreach.
{

/*if (strlen($row->pro_photo) <= 4)
{
    $image_src = $row->pro_id.".".$row->pro_photo;
} else {
    $image_src = $row->pro_photo;
}*/

?>
    <tr>
    <td><img src ="images/jarditou_photos/<?=$row->pro_photo?>" width= "100" height= "auto" class="text-center align-middle"></td>
    <td class="text-center align-middle"><?= $row->pro_id ?> </td>
    <td class="text-center align-middle"> <?= $row->pro_ref ?></td>
    <td class="text-center align-middle"><a href="detail.php?pro_id=<?= $row->pro_id ?>" title="libelle" id="link_dark" style= "color: #4169FE; text-decoration: underline" > <?= $row->pro_libelle ?> </a></td>
    <td class="text-center align-middle"> <?= $row->pro_prix ?> €</td>
    <td class="text-center align-middle"> <?= $row->pro_stock ?> </td>
    <td class="text-center align-middle"> <?= $row->pro_couleur ?> </td>
    <td class="text-center align-middle"> <?= $row->pro_d_ajout  ?></td>
    <td class="text-center align-middle"> <?= $row->pro_d_modif ?> </td>
    <td class="text-center align-middle"> <?= $row->pro_bloque ?> </td>
    </tr>
    <?php
}
?>
 
</table>

</div>
</div>


    <!-- FOOTER -->

<?php
include("pieddepage.php"); // Inclure le pied de page dans le fichier tableau.php
?>
