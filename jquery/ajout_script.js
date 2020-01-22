function verif() 
{     
     // Récupère la valeur saisie dans le champ input     
     var reference = $("#reference").val();
     var reference_v = /(^[A-Z]{2}[-][0-9]{2})$/;
     var categorie = $("#pro_cat_id").val();
     var libelle = $("#libelle").val();
     var description = $("#description").val();
     var prix = $("#prix").val();
     var prix_v = /(^[0-9]+)$/;
     var stock = $("#stock").val();
     var stock_v = /(^[0-9]+)$/;
     var couleur = $("#couleur").val();
     var couleur_v = /^[A-Za-z]+$/;
     var bloque_oui = $("#bloque_oui").prop('checked'); // .prop pour récupérer si le bouton radio est coché ou non
     var bloque_non = $("#bloque_non").prop('checked');
 
     // Teste si la valeur est bonne

     // REFERENCE

     if (reference === "") 
    {            
        var html = '<div class="alert alert-danger" role="alert">Votre référence doit être renseignée !</div>';
        $("#alert12").append(html); // .append pour afficher le HTML dans le span #alert12
    }
    else if (reference_v.test(reference) == false) 
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert12").append(html);
     }
    else
    {
        var html = '<div class="alert alert-success" role="alert">Votre référence est validée</div>';
        $("#alert12").append(html);
    }
    
    // CATEGORIE
 
     if (categorie === "") 
    {            
        var html = '<div class="alert alert-danger" role="alert">Votre catégorie doit être renseignée !</div>';
        $("#alert13").append(html);
    }
    else
    {
        var html = '<div class="alert alert-success" role="alert">Votre catégorie est validée</div>';
        $("#alert13").append(html);
    }   

    // LIBELLE
     
     if (libelle === "") 
    {            
        var html = '<div class="alert alert-danger" role="alert">Votre libellé doit être renseigné !</div>';
        $("#alert14").append(html);
    }
    else
    {
        var html = '<div class="alert alert-success" role="alert">Votre libellé est validé</div>';
        $("#alert14").append(html);
    }

    // DESCRIPTION

     if (description === "") 
    {            
        var html = '<div class="alert alert-danger" role="alert">Votre description doit être renseignée !</div>';
        $("#alert15").append(html);
    }
    else
    {
        var html = '<div class="alert alert-success" role="alert">Votre description est validée</div>';
        $("#alert15").append(html);
    }

    // PRIX

     if (prix === "") 
    {            
        var html = '<div class="alert alert-danger" role="alert">Votre prix doit être renseigné !</div>';
        $("#alert16").append(html);
    }
    else if (prix_v.test(prix) == false) 
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert16").append(html);
     }
    else
    {
        var html = '<div class="alert alert-success" role="alert">Votre prix est validé</div>';
        $("#alert16").append(html);
    }

    // STOCK

     if (stock === "") 
    {            
        var html = '<div class="alert alert-danger" role="alert">Votre stock doit être renseigné !</div>';
        $("#alert17").append(html);
    }
    else if (stock_v.test(stock) == false) 
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert17").append(html);
     }
    else
    {
        var html = '<div class="alert alert-success" role="alert">Votre stock est validé</div>';
        $("#alert17").append(html);
    }

    // COULEUR

     if (couleur === "") 
    {            
        var html = '<div class="alert alert-danger" role="alert">Votre couleur doit être renseignée !</div>';
        $("#alert18").append(html);
    }
    else if (couleur_v.test(couleur) == false) 
     {
        var html = '<div class="alert alert-warning" role="alert">Format non valide !</div>';
        $("#alert18").append(html);
     }
    else
    {
        var html = '<div class="alert alert-success" role="alert">Votre couleur est validée</div>';
        $("#alert18").append(html);
    }

    // PRODUIT BLOQUE

     if (bloque_oui === false && bloque_non === false) 
    {            
        var html = '<div class="alert alert-danger" role="alert">Une des deux cases doit être cochée !</div>';
        $("#alert19").append(html); 
        return false; // Pour éviter l'envoi du formulaire en jQuery
     }
     else
     {
         var html = '<div class="alert alert-success" role="alert">Votre champ est validé</div>';
         $("#alert19").append(html);
     }

     // Si aucun test n'a renvoyé faux, c'est qu'il n'y a pas d'erreurs, le script arrive ici, le formulaire est envoyé via submit()
     document.forms[0].submit();   
} 
 
$("#bouton_envoi2").click(function(event) 
{
    /* 
    On doit bloquer l'èvènement par défaut - ici l'envoi du formulaire avec l'instruction preventDefault(). Le paramètre 'event' est un objet (nommé librement) représentant l'évènement
    */         
    event.preventDefault();
 
    // Appel de la fonction verif()
    verif();             
});