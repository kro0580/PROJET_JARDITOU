<?php
include("entete.php");
?>

<!-- CONTENU DE MA PAGE -->

<p class><b>* Ces zones sont obligatoires</b></p>
        
        <div class="row">
            <!-- class="was-validated pour avoir les couleurs vertes et rouges du formulaire -->
                <form class="was-validated col-lg-12" action="php/formulaire_script.php" method="post">
            
                    <fieldset>
            
                        <legend>Vos Coordonnées</legend>
    
            <!-- class="form-group" et class="form-control" pour présentation du formulaire avec Bootstrap -->
                        <div class="form-group">
                        <label for="nom">Votre nom<b>*</b> :</label>
            <!-- required pour rendre la saisie obligatoire - A remettre pour le JS une fois que l'on a testé le PHP-->
                            <input type="text" class="form-control" required name="nom" id="nom">
                            <span id="nom_manquant"></span>
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
                            <input type="text" class="form-control" required name="prenom" id="prenom">
                            <span id="prenom_manquant"></span>
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
    
                        <p>Sexe<b>*</b> :</p>
    
                        <div class="form-check">
                                <input class="form-check-input" type="radio" value="masculin" id="sexe" required name="customRadio">
                                <label class="form-check-label" for="sexe">Masculin</label>
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" value="feminin" id="sexe" required name="customRadio">
                                <label class="form-check-label" for="sexe">Féminin</label>
                        </div><br>
                        <span id="sexe_manquant"></span>
    
                        <?php
    
                                if (isset($_GET["erreur3"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ sexe n'est pas renseigné</div>
                                    <?php
                                }
    
                        ?>
    
                        <div class="form-group">
                        <label for="naissance">Date de Naissance<b>*</b> :</label>
                            <input type="date" max="date.toLocaleDateString()" min="1900-01-01" class="form-control" required name="naissance" id="naissance">
                            <span id="naissance_manquante"></span>
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de saisir votre date de naissance</div>
                        </div>
                        <?php
    
                                if (isset($_GET["erreur4"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ date de naissance n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur4b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre date de naissance n'est pas correct</div>
                                    <?php
                                }
    
                        ?>
    
                        <div class="form-group">
                        <label for="code_postal">Code postal<b>*</b> :</label>
                            <input type="text" class="form-control" required name="code_postal" id="code_postal">
                            <span id="code_postal_manquant"></span>
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de saisir votre code postal</div>
                        </div>
                        <?php
    
                                if (isset($_GET["erreur5"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ code postal n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur5b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre code postal n'est pas correct</div>
                                    <?php
                                }
    
                        ?>
    
                        <div class="form-group">
                        <label for="adresse">Adresse<b>*</b> :</label>
                            <input type="text" class="form-control" required name="adresse" id="adresse">
                            <span id="adresse_manquante"></span>
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de saisir votre adresse</div>
                        </div>
                        <?php
    
                                if (isset($_GET["erreur6"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Le champ adresse n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur6b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre adresse n'est pas correct</div>
                                    <?php
                                }
    
                        ?>
    
                        <div class="form-group">
                        <label for="ville">Ville<b>*</b> :</label>
                            <input type="text" class="form-control" required name="ville" id="ville">
                            <span id="ville_manquante"></span>
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de saisir votre ville</div>
                        </div>
                        <?php
    
                                if (isset($_GET["erreur7"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >La ville n'est pas renseignée</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur7b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre ville n'est pas correct</div>
                                    <?php
                                }
    
                        ?>
                        
                        <div class="form-group">
                        <label for="email">Email<b>*</b> :</label>
                            <input type="text" class="form-control" placeholder="dave.loper@afpa.fr" required name="email" id="email">
                            <span id="email_manquant"></span>
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de saisir votre Email</div>
                        </div>
                        <?php
    
                                if (isset($_GET["erreur8"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Votre email n'est pas renseigné</div>
                                    <?php
                                }
                                else if (isset($_GET["erreur8b"]))
                                {
                                    ?>
                                    <div class = "alert alert-warning" >Le format de votre email n'est pas correct</div>
                                    <?php
                                }
    
                        ?>
    
                    </fieldset><br>
    
                    <fieldset>
                        
                        <legend>Votre demande</legend>
    
                        <div class="form-group">
                        <label for="sujet">Sujet<b>*</b> :</label>
                        <select class="selectpicker form-control" required name="demande" size="1" id="sujet">
                            <option value="">--- Choisissez un item ---</option>
                            <option value="commandes">Mes commandes</option>
                            <option value="questions">Question sur un produit</option>
                            <option value="reclamation">Réclamation</option>
                            <option value="autres">Autres</option>
                        </select>
                        </div>
                        <span id="sujet_manquant"></span>
                        <?php
    
                                if (isset($_GET["erreur9"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Votre sujet n'est pas renseigné</div>
                                    <?php
                                }
    
                        ?>
                    
                        <div class="form-group">
                            <label for="question">Votre question<b>*</b> :</label>
                            
                            <textarea class="form-control" id="question" required name="question" id="question"></textarea>
                            <span id="question_manquante"></span>
                            <div class="valid-feedback">Champ Valide</div>
                            <div class="invalid-feedback">Merci de saisir votre question</div>
                        </div>
                        <?php
    
                                if (isset($_GET["erreur10"]))
                                {
                                    ?>
                                    <div class = "alert alert-danger" >Votre question n'est pas renseignée</div>
                                    <?php
                                }
    
                        ?>
    
                    </fieldset>
    
        <div class="form-group custom-control custom-checkbox">
            <input type="checkbox" required name="accord" value="accord" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">J'accepte le traitement informatique de ce formulaire</label>
            <div class="valid-feedback">Champs Valide</div>
            <div class="invalid-feedback">Cochez cette case pour continuer</div>
        </div>
        <span id="customCheck1_manquant"></span>
        <?php
    
            if (isset($_GET["erreur11"]))
                {
                    ?>
                    <div class = "alert alert-danger" >Vous devez cocher la case</div>
                    <?php
                }
    
        ?>
        
    
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Envoyer" id="bouton_envoi">
            <input type="reset" class="btn btn-danger" value="Annuler">
        </div>
    
                </form>
    
        </div>

    <!-- PIED DE PAGE -->

<?php
include("pieddepage.php");
?>