var validation2 = document.getElementById("bouton_envoi2");

function a_valid()
{
    var reference = document.getElementById("reference");
    var reference_m = document.getElementById("reference_manquante");
    var reference_v = /(^[A-Z]{2}[-][0-9]{2})$/;

    var categorie = document.getElementById("pro_cat_id");
    var categorie_m = document.getElementById("categorie_manquante");

    var libelle = document.getElementById("libelle");
    var libelle_m = document.getElementById("libelle_manquant");

    var description = document.getElementById("description");
    var description_m = document.getElementById("description_manquante");

    var prix = document.getElementById("prix");
    var prix_m = document.getElementById("prix_manquant");
    var prix_v = /^[0-9]+$/;

    var stock = document.getElementById("stock");
    var stock_m = document.getElementById("stock_manquant");
    var stock_v = /^[0-9]+$/;

    var couleur = document.getElementById("couleur");
    var couleur_m = document.getElementById("couleur_manquante");
    var couleur_v = /^[A-Za-z]+$/;

    var bloque_oui = document.getElementById("bloque_oui");
    var bloque_non = document.getElementById("bloque_non");
    var bloque_m = document.getElementById("bloque_manquant");
    
    // REFERENCE
    
    if(reference.value == "")
    {
        event.preventDefault();
        reference_m.textContent = "Le champ référence est vide";
        reference_m.style.color = "white";
        reference_m.style.background = "#F51308";
        reference_m.style.textAlign = "center";
        reference_m.style.padding = "10px";
    }
    else if(reference_v.test(reference.value) == false)
    {
        event.preventDefault();
        reference_m.textContent = "Le format pour la référence est incorrect";
        reference_m.style.color = "white";
        reference_m.style.background = "#F51308";
        reference_m.style.textAlign = "center";
        reference_m.style.padding = "10px";
    }
    else
    {
        reference_m.textContent = "✔";
        reference_m.style.background = "green";
        reference_m.style.textAlign = "center";
        reference_m.style.padding = "10px";
    }

    // CATEGORIE

    if(categorie.value == "")
    {
        event.preventDefault();
        categorie_m.textContent = "Le champ catégorie est vide";
        categorie_m.style.color = "white";
        categorie_m.style.background = "#F51308";
        categorie_m.style.textAlign = "center";
        categorie_m.style.padding = "10px";
    }
    else
    {
        categorie_m.textContent = "✔";
        categorie_m.style.background = "green";
        categorie_m.style.textAlign = "center";
        categorie_m.style.padding = "10px";
    }

    // LIBELLE

    if(libelle.value == "")
    {
        event.preventDefault();
        libelle_m.textContent = "Le champ libellé est vide";
        libelle_m.style.color = "white";
        libelle_m.style.background = "#F51308";
        libelle_m.style.textAlign = "center";
        libelle_m.style.padding = "10px";
    }
    else
    {
        libelle_m.textContent = "✔";
        libelle_m.style.background = "green";
        libelle_m.style.textAlign = "center";
        libelle_m.style.padding = "10px";
    }

    // DESCRIPTION

    if(description.value == "")
    {
        event.preventDefault();
        description_m.textContent = "Le champ description est vide";
        description_m.style.color = "white";
        description_m.style.background = "#F51308";
        description_m.style.textAlign = "center";
        description_m.style.padding = "10px";
    }
    else
    {
        description_m.textContent = "✔";
        description_m.style.background = "green";
        description_m.style.textAlign = "center";
        description_m.style.padding = "10px";
    }

    // PRIX

    if(prix.value == "")
    {
        event.preventDefault();
        prix_m.textContent = "Le champ prix est vide";
        prix_m.style.color = "white";
        prix_m.style.background = "#F51308";
        prix_m.style.textAlign = "center";
        prix_m.style.padding = "10px";
    }
    else if(prix_v.test(prix.value) == false)
    {
        event.preventDefault();
        prix_m.textContent = "Vous devez saisir votre prix en chiffres";
        prix_m.style.color = "white";
        prix_m.style.background = "#F51308";
        prix_m.style.textAlign = "center";
        prix_m.style.padding = "10px";
    }
    else
    {
        prix_m.textContent = "✔";
        prix_m.style.background = "green";
        prix_m.style.textAlign = "center";
        prix_m.style.padding = "10px";
    }

    // STOCK

    if(stock.value == "")
    {
        event.preventDefault();
        stock_m.textContent = "Le champ stock est vide";
        stock_m.style.color = "white";
        stock_m.style.background = "#F51308";
        stock_m.style.textAlign = "center";
        stock_m.style.padding = "10px";
    }
    else if(stock_v.test(stock.value) == false)
    {
        event.preventDefault();
        stock_m.textContent = "Vous devez saisir votre stock en chiffres";
        stock_m.style.color = "white";
        stock_m.style.background = "#F51308";
        stock_m.style.textAlign = "center";
        stock_m.style.padding = "10px";
    }
    else
    {
        stock_m.textContent = "✔";
        stock_m.style.background = "green";
        stock_m.style.textAlign = "center";
        stock_m.style.padding = "10px";
    }

    // COULEUR

    if(couleur.value == "")
    {
        event.preventDefault();
        couleur_m.textContent = "Le champ couleur est vide";
        couleur_m.style.color = "white";
        couleur_m.style.background = "#F51308";
        couleur_m.style.textAlign = "center";
        couleur_m.style.padding = "10px";
    }
    else if(couleur_v.test(couleur.value) == false)
    {
        event.preventDefault();
        couleur_m.textContent = "Vous devez saisir votre couleur en lettres";
        couleur_m.style.color = "white";
        couleur_m.style.background = "#F51308";
        couleur_m.style.textAlign = "center";
        couleur_m.style.padding = "10px";
    }
    else
    {
        couleur_m.textContent = "✔";
        couleur_m.style.background = "green";
        couleur_m.style.textAlign = "center";
        couleur_m.style.padding = "10px";
    }

    // PRODUIT BLOQUE

    if((!bloque_oui.checked && !bloque_non.checked))
    {
        event.preventDefault();
        bloque_m.textContent = "Vous devez sélectionner une case";
        bloque_m.style.color = "white";
        bloque_m.style.background = "#F51308";
        bloque_m.style.textAlign = "center";
        bloque_m.style.padding = "10px";
    }
    else
    {
        bloque_m.textContent = "✔";
        bloque_m.style.background = "green";
        bloque_m.style.textAlign = "center";
        bloque_m.style.padding = "10px";
    }
    
}

validation2.addEventListener("click", a_valid);