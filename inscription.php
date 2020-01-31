<?php
include("entete.php");

date_default_timezone_set('Europe/Paris');
$date = date("d-m-Y H:i:s");
?>

<h2><b>Inscription</b></h2>

<p class="noir"><b>* Ces zones sont obligatoires</b></p>

<div class="row">

<form class="was-validated col-lg-12" action="php/inscription_script.php" method="post">

<div class="form-group">
                        <label for="nom">Votre nom<b>*</b> :</label>
            <!-- required pour rendre la saisie obligatoire - A remettre pour le JS une fois que l'on a testé le PHP -->
                            <input type="text" class="form-control" name="nom" id="nom" required>
                            <span id="nom_manquant"></span> <!-- Affichage du message d'erreur JS dans le formulaire -->
                            <span id="alert1"></span> <!-- Affichage du message d'erreur jQuery dans le formulaire -->
            <!-- Affichage de texte en cas de saisie valide et en cas de saisie invalide -->
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de saisir votre nom</div> 
                        </div>
            <!-- Gestion des erreurs en PHP en lien avec le fichier formulaire_script.php -->
                        
                        <?php
                        
    
                                if (isset($_GET["erreur1"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ nom n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur1b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre nom n'est pas correct</div>
                                    <?php
                                }
                        
                        ?>
                        
                        <div class="form-group">
                        <label for="prenom">Votre prénom<b>*</b> :</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" required>
                            <span id="prenom_manquant"></span>
                            <span id="alert2"></span>
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de saisir votre prénom</div>
                        </div>
                        <?php
    
                                if (isset($_GET["erreur2"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ prénom n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur2b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre prénom n'est pas correct</div>
                                    <?php
                                }
    
                        ?>

                        <div class="form-group">
                        <label for="email">Votre mail<b>*</b> :</label>
                            <input type="email" class="form-control" placeholder="dave.loper@afpa.fr" name="email" id="email" required>
                            <span id="email_manquant"></span>
                            <span id="alert3"></span>
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de saisir votre mail</div>
                        </div>
                        <?php
    
                                if (isset($_GET["erreur3"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ mail n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur3b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre mail n'est pas correct</div>
                                    <?php
                                }
    
                        ?>

                        <div class="form-group">
                        <label for="identifiant">Votre login<b>*</b> :</label>
                            <input type="text" class="form-control" name="identifiant" id="identifiant" required>
                            <span id="identifiant_manquant"></span>
                            <span id="alert4"></span>
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de saisir votre login</div>
                        </div>
                        <?php
    
                                if (isset($_GET["erreur4"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ login n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur4b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre login n'est pas correct</div>
                                    <?php
                                }
    
                        ?>

                        <div class="form-group">
                        <label for="password">Votre mot de passe<b>*</b> :</label>
                        <p style = "font-size : 12px"><em><b>(Il doit comporter de 8 à 15 caractères, au moins une lettre minuscule, au moins une lettre majuscule, au moins un chiffre, au moins un de ces caractères spéciaux : $ @ % * + - _ !)</b></em></p>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <span id="password_manquant"></span>
                            <span id="alert5"></span>
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de saisir votre mot de passe</div>
                        </div>
                        <?php
    
                                if (isset($_GET["erreur5"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ mot de passe n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur5b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre mot de passe n'est pas correct</div>
                                    <?php
                                }
    
                        ?>

                        <div class="form-group">
                        <label for="conf_password">Confimation de votre mot de passe<b>*</b> :</label>
                            <input type="password" class="form-control" name="conf_password" id="conf_password" required>
                            <span id="conf_password_manquant"></span>
                            <span id="alert6"></span>
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de confirmer votre mot de passe</div>
                        </div>
                        <?php
    
                                if (isset($_GET["erreur6"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Votre mot de passe n'a pas été confirmé</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur6b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Vos deux mots de passe sont différents</div>
                                    <?php
                                }
    
                        ?>

                        <div class="form-group">
                        <label for="login">Date d'inscription :</label>
                        <input type="text" class="form-control" name="inscription" value ="<?=$date?>" readonly id="inscription">
                        </div>

                        <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Envoyer" id="bouton_envoi2">
                        <input type="reset" class="btn btn-danger" value="Annuler">
                        </div>

</form>    

</div>

<?php
include("pieddepage.php");
?>

<!-- Script JavaScript -->
<!-- <script src="js\inscription_script.js"></script> -->

<!-- Script jQuery -->
<script src="jquery\inscription_script.js"></script>