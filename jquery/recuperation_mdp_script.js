function verif3() 
{ 
var email = $("#email").val();
var email_v = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,252}\.[a-z]{2,4}$/;

// EMAIL

if (email === "") 
{            
   var html = '<div class="alert alert-danger" role="alert">Votre email doit être renseigné !</div>';
   $("#alert1").append(html);
   return false; 
}
else if (email_v.test(email) == false)
{
   var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
   $("#alert1").append(html);
   return false;
}
else
{
    var html = '<div class="alert alert-success" role="alert">Votre email est validé</div>';
    $("#alert1").append(html);
}

// Si aucun test n'a renvoyé faux, c'est qu'il n'y a pas d'erreur, le script arrive ici, le formulaire est envoyé via submit()
document.forms[0].submit();

}

$("#recup_submit").click(function(event) 
{
    /* 
    On doit bloquer l'èvènement par défaut - ici l'envoi du formulaire avec l'instruction preventDefault(). Le paramètre 'event' est un objet (nommé librement) représentant l'évènement
    */         
    event.preventDefault();
 
    // Appel de la fonction verif()
    verif3();             
});