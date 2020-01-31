function verif4() 
{ 
    var password = $("#new_password").val();
    var password_v = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;
    // Mot de passe qui doit comporter de 8 à 15 caractères, au moins une lettre minuscule, au moins une lettre majuscule, au moins un chiffre, au moins un de ces caractères spéciaux: $ @ % * + - _ !, aucun autre caractère possible: pas de & ni de { par exemple
    var conf_password = $("#confirm_password").val();

// PASSWORD

if (password === "") 
{            
   var html = '<div class="alert alert-danger" role="alert">Votre mot de passe doit être renseigné !</div>';
   $("#alert1").append(html); 
}
else if (password_v.test(password) == false)
{
   var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
   $("#alert1").append(html);
}
else
{
    var html = '<div class="alert alert-success" role="alert">Votre mot de passe est validé</div>';
    $("#alert1").append(html);
}

// CONFIRMATION PASSWORD

if (conf_password === "") 
{            
   var html = '<div class="alert alert-danger" role="alert">Votre confirmation de mot de passe doit être renseigné !</div>';
   $("#alert2").append(html);
   return false;
}
else if (conf_password !== password)
{
   var html = '<div class="alert alert-warning" role="alert">Les deux mots de passe sont différents !</div>';
   $("#alert2").append(html);
   return false;
}
else
{
    var html = '<div class="alert alert-success" role="alert">Votre confirmation de mot de passe est validée</div>';
    $("#alert2").append(html);
}

// Si aucun test n'a renvoyé faux, c'est qu'il n'y a pas d'erreur, le script arrive ici, le formulaire est envoyé via submit()
document.forms[0].submit();

}

$("#new_submit").click(function(event) 
{
    /* 
    On doit bloquer l'èvènement par défaut - ici l'envoi du formulaire avec l'instruction preventDefault(). Le paramètre 'event' est un objet (nommé librement) représentant l'évènement
    */         
    event.preventDefault();
 
    // Appel de la fonction verif()
    verif4();             
});