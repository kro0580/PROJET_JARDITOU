function verif2() 
{     
     // Récupère la valeur saisie dans le champ input      
     var nom = $("#nom").val();
     var nom_v = /^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/;
     var prenom = $("#prenom").val();
     var prenom_v = /^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/;
     var email = $("#email").val();
     var email_v = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,252}\.[a-z]{2,4}$/;
     var identifiant = $("#identifiant").val();
     var identifiant_v = /^[a-zA-Z0-9]+$/;
     var password = $("#password").val();
     var password_v = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;
     // Mot de passe qui doit comporter de 8 à 15 caractères, au moins une lettre minuscule, au moins une lettre majuscule, au moins un chiffre, au moins un de ces caractères spéciaux: $ @ % * + - _ !, aucun autre caractère possible: pas de & ni de { par exemple
     var conf_password = $("#conf_password").val();
     

// On teste si la valeur est bonne

     // NOM

     if (nom === "") 
     {          
         var html = '<div class="alert alert-danger" role="alert">Votre nom doit être renseigné !</div>';
         $("#alert1").append(html);
     }
     else if (nom_v.test(nom.value) == false) // nom.value fait appel à l'ID du formulaire et on teste la valeur de la saisie que l'on compare avec la regex
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert1").append(html);
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre nom est validé</div>';
         $("#alert1").append(html);
     }

     // PRENOM

     if (prenom === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre prénom doit être renseigné !</div>';
        $("#alert2").append(html); 
     }
     else if (prenom_v.test(prenom.value) == false)
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert2").append(html);
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre prénom est validé</div>';
         $("#alert2").append(html);
     }

     // EMAIL

     if (email === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre email doit être renseigné !</div>';
        $("#alert3").append(html); 
     }
     else if (email_v.test(email) == false)
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert3").append(html);
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre email est validé</div>';
         $("#alert3").append(html);
     }

     // LOGIN

     if (identifiant === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre login doit être renseigné !</div>';
        $("#alert4").append(html); 
     }
     else if (identifiant_v.test(identifiant.value) == false)
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert4").append(html);
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre login est validé</div>';
         $("#alert4").append(html);
     }

     // PASSWORD

     if (password === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre mot de passe doit être renseigné !</div>';
        $("#alert5").append(html); 
     }
     else if (password_v.test(password) == false)
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert5").append(html);
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre mot de passe est validé</div>';
         $("#alert5").append(html);
     }

     // CONFIRMATION PASSWORD

     if (conf_password === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre confirmation de mot de passe doit être renseigné !</div>';
        $("#alert6").append(html);
        return false;
     }
     else if (conf_password !== password)
     {
        var html = '<div class="alert alert-warning" role="alert">Les deux mots de passe sont différents !</div>';
        $("#alert6").append(html);
        return false;
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre confirmation de mot de passe est validée</div>';
         $("#alert6").append(html);
     }

    // Si aucun test n'a renvoyé faux, c'est qu'il n'y a pas d'erreur, le script arrive ici, le formulaire est envoyé via submit()
    document.forms[0].submit();

}

     $("#bouton_envoi2").click(function(event) 
{
    /* 
    On doit bloquer l'èvènement par défaut - ici l'envoi du formulaire avec l'instruction preventDefault(). Le paramètre 'event' est un objet (nommé librement) représentant l'évènement
    */         
    event.preventDefault();
 
    // Appel de la fonction verif()
    verif2();             
});