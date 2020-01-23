// !! POUR TESTER LE JQUERY C'EST COMME POUR TESTER LE PHP, IL FAUT DESACTIVER LE SCRIPT JS DANS LE FORMULAIRE PUIS REMETTRE APRES !!

// Changement de la couleur du paragraphe "Ces zones sont obligatoires" au click de la souris dans la page FORMULAIRE
$(document).ready(function() 
{
$(".noir").click(function()         
{
    $(this).css("color", "red");                               
});
}); 

// Changement de la couleur des titres h4 dans la page INDEX
$("h4").css("color","#1E90FF");

// Au passage de la souris, récupère le texte de l'élément #entreprise et le stocke dans la variable a
$("#entreprise").mouseover(function() 
{      
   var a = $(this).text(); 
 
   alert(a);        
});

// Changement du contenu colonne de droite au click de la souris dans la page INDEX
$(document).ready(function() 
{
$("#div1").click(function()         
{
    $('#div1').html("<h1>Bienvenue sur notre site !</h1>");                               
});
}); 

function verif() 
{     
     // Récupère la valeur saisie dans le champ input      
     var nom = $("#nom").val();
     var nom_v = /^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/;
     var prenom = $("#prenom").val();
     var prenom_v = /^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/;
     var sexe_ma = $("#sexe_ma").prop('checked');
     var sexe_fe = $("#sexe_fe").prop('checked');
     var naissance = $("#naissance").val();
     var adresse = $("#adresse").val();
     var adresse_v = /([a-zA-Z,\. ]*)?([a-zA-Z]*)/;
     var postal = $("#code_postal").val();
     var postal_v = /^[0-9]{5}$/;
     var ville = $("#ville").val();
     var ville_v = /^[A-zA-ZéèîïÉÈÎÏ][A-zA-Zéèêàçîï]+([-'\s][A-zA-ZéèîïÉÈÎÏ][A-zA-Zéèêàçîï])?([-'\s][A-zA-ZéèîïÉÈÎÏ][A-zA-Zéèêàçîï]+)?$/;
     var mail = $("#email").val();
     var email_v = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,252}\.[a-z]{2,4}$/;
     var sujet = $("#sujet").val();
     var question = $("#question").val();
     var accord = $("#customCheck1").prop('checked');
 
     // On teste si la valeur est bonne

     // NOM

     if (nom === "") 
     {          
         var html = '<div class="alert alert-danger" role="alert">Votre nom doit être renseigné !</div>';
         $("#alert1").append(html);
     }
     else if (nom_v.test(nom.value) == false) // nom.value fait appel a l'ID du formulaire et on teste la valeur de la saisie que l'on compare avec la regex
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

     // SEXE
     
     if (sexe_ma === false && sexe_fe === false) 
     {            
        var html = '<div class="alert alert-danger" role="alert">Une des deux cases doit être cochée !</div>';
        $("#alert3").append(html); 
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre champ est validé</div>';
         $("#alert3").append(html);
     }

     // DATE DE NAISSANCE

     if (naissance === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre date de naissance doit être renseignée !</div>';
        $("#alert4").append(html); 
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre date de naissance est validée</div>';
         $("#alert4").append(html);
     }
     
     // ADRESSE

     if (adresse === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre adresse doit être renseignée !</div>';
        $("#alert5").append(html); 
     }
     else if (adresse_v.test(adresse.value) == false)
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert5").append(html);
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre adresse est validée</div>';
         $("#alert5").append(html);
     } 

     // CODE POSTAL

     if (postal === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre code postal doit être renseigné !</div>';
        $("#alert6").append(html); 
     }
     else if (postal_v.test(code_postal.value) == false)
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert6").append(html);
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre code postal est validé</div>';
         $("#alert6").append(html);
     } 

     // VILLE
     
     if (ville === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre ville doit être renseignée !</div>';
        $("#alert7").append(html); 
     }
     else if (ville_v.test(ville.value) == false)
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert7").append(html);
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre ville est validée</div>';
         $("#alert7").append(html);
     }

     // EMAIL

     if (mail === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre email doit être renseigné !</div>';
        $("#alert8").append(html); 
     }
     else if (email_v.test(email.value) == false)
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert8").append(html);
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre email est validé</div>';
         $("#alert8").append(html);
     }

     // SUJET

     if (sujet === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre sujet doit être renseigné !</div>';
        $("#alert9").append(html); 
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre sujet est validé</div>';
         $("#alert9").append(html);
     }

     // QUESTION

     if (question === "") 
     {            
        var html = '<div class="alert alert-danger" role="alert">Votre question doit être renseignée !</div>';
        $("#alert10").append(html); 
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre question est validée</div>';
         $("#alert10").append(html);
     }

     // ACCORD

     if (accord === false) 
     {            
        var html = '<div class="alert alert-danger" role="alert">La case doit être cochée !</div>';
        $("#alert11").append(html); 
        return false; // Pour éviter l'envoi du formulaire en jQuery
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre accord est enregistré</div>';
         $("#alert11").append(html);
     } 

     // Si aucun test n'a renvoyé faux, c'est qu'il n'y a pas d'erreur, le script arrive ici, le formulaire est envoyé via submit()
     document.forms[0].submit();   
}


$("#bouton_envoi").click(function(event) 
{
    /* 
    On doit bloquer l'èvènement par défaut - ici l'envoi du formulaire avec l'instruction preventDefault(). Le paramètre 'event' est un objet (nommé librement) représentant l'évènement
    */         
    event.preventDefault();
 
    // Appel de la fonction verif()
    verif();             
});