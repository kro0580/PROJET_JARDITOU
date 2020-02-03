<?php
include("entete.php");
?>

<h4>Nouveau mot de passe</h4>

<div class="form-group"></br>

<form method="post" action="php/new_mdp_script.php">

<input type="password" class="form-control" placeholder="Veuillez indiquer votre nouveau mot de passe" name="new_password" id="new_password" required/></br>
<p style = "font-size : 12px"><em><b>(Il doit comporter de 8 à 15 caractères, au moins une lettre minuscule, au moins une lettre majuscule, au moins un chiffre, au moins un de ces caractères spéciaux : $ @ % * + - _ !)</b></em></p>
    <span id="password_manquant"></span>
    <span id="alert1"></span>
    <div class="valid-feedback">Champ Valide</div>
    <div class="invalid-feedback">Merci de saisir votre nouveau mot de passe</div>

    <?php
    
                                if (isset($_GET["erreur1"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ nouveau mot de passe n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur1b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre nouveau mot de passe n'est pas correct</div>
                                    <?php
                                }
    
    ?>

<input type="password" class="form-control" placeholder="Veuillez confirmer votre nouveau mot de passe" name="confirm_password" id="confirm_password" required/></br>
<p style = "font-size : 12px"><em><b>(Il doit comporter de 8 à 15 caractères, au moins une lettre minuscule, au moins une lettre majuscule, au moins un chiffre, au moins un de ces caractères spéciaux : $ @ % * + - _ !)</b></em></p>
    <span id="confirm_manquant"></span>
    <span id="alert2"></span>
    <div class="valid-feedback">Champ Valide</div>
    <div class="invalid-feedback">Merci de confirmer votre nouveau mot de passe</div>

    <?php $valeur=$_GET['email']; echo '<input type="mail" hidden class="form-control" name="mail" id="mail" value="'.$valeur.'">'; ?> <!-- input mail caché pour permettre la récupération du mail dans le new_mdp_script.php -->
    <?php
    
                                if (isset($_GET["erreur2"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ confirmation de votre nouveau mot de passe n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur2b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Vos deux mots de passe sont différents</div>
                                    <?php
                                }
    
    ?>

<div class="form-group">
<input type="submit" class="btn btn-success" value="Envoyer" id="new_submit" name="new_submit">
<input type="reset" class="btn btn-danger" value="Annuler">
</div>

</form>

</div>

<?php
include("pieddepage.php");
?>

<!-- Script jQuery -->
<script src="jquery\new_mdp_script.js"></script>