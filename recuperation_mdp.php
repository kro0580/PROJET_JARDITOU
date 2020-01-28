<?php
include("entete.php");
?>

<h4>Récupération du mot de passe</h4>

<div class="form-group"></br>

<form method="post" action="php/recuperation_mdp_script.php">

<input type="email" class="form-control" placeholder="Veuillez indiquer votre adresse mail" name="recup_mail" id="email" required /></br>
    <span id="email_manquant"></span>
    <span id="alert1"></span>
    <div class="valid-feedback">Champ Valide</div>
    <div class="invalid-feedback">Merci de saisir votre mail</div>

    <?php
    
                                if (isset($_GET["erreur1"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ mail n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur1b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre mail n'est pas correct</div>
                                    <?php
                                }
    
    ?>

<div class="form-group">
<input type="submit" class="btn btn-success" value="Envoyer" id="recup_submit" name="recup_submit">
<input type="reset" class="btn btn-danger" value="Annuler">
</div>

</form>

</div>

<?php
include("pieddepage.php");
?>

<!-- Script jQuery -->
<script src="jquery\recuperation_mdp_script.js"></script>