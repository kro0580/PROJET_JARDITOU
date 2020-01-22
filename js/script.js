/* EXERCICE 7 */

var validation = document.getElementById("bouton_envoi");
// Si un champ est vide, le formulaire ne doit pas être envoyé et un message d'erreur doit être affiché à l'utilisateur //
// On va créer un gestionnaire d'évènement click contenant la fonction de validation //
// On rajoute un id à l'input type = "submit" afin de pouvoir y accéder plus facilement //

function f_valid()
{

    // On récupère le nom saisi dans la variable nom //
    var nom = document.getElementById("nom");
    // On récupère le nom manquant dans la div créée avant le formulaire //
    var nom_m = document.getElementById("nom_manquant");
    // Regex pour la saisie du nom qui sera comparée au nom saisi //
    // ^ et $ pour établir le contrôle du début à la fin de la chaîne //
    // On demande à l'utilisateur de saisir des caractères en majuscule ou en minuscule //
    // + est un symbole qui indique que le caractère qui le précède peut apparaître une ou plusieurs fois //
    var nom_v = /^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/;
    
    var prenom = document.getElementById("prenom");
    var prenom_m = document.getElementById("prenom_manquant");
    // Regex pour la saisie du nom qui sera comparée au nom saisi //
    // ^ et $ pour établir le contrôle du début à la fin de la chaîne //
    // On demande à l'utilisateur de commencer soit par une lettre non accentuée en majuscule ou en minuscule, soit par l'un des caractères suivants "éèîïÉÈÎÏ" //
    // On demande ensuite à l'utilisateur que cette première lettre soit suivi par au moins une lettre en minuscule ou par l'un des caractères suivants "éèêàçîï" //
    // Utilisation du signe + pour demander au moins une autre //
    // La deuxième partie concerne le second prénom dans le cas d'un prénom composé ou d'un prénom contenant un apostrophe //
    // La deuxième partie commence soit par un tiret, un apostrophe ou un espace puis se poursuit par le deuxième prénom //
    // ? est un symbole qui indique que le caractère qui le précède peut apparaître 0 ou 1 fois //
    var prenom_v = /^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/;
    
    var sexe_ma = document.getElementById("sexe_ma");
    var sexe_fe = document.getElementById("sexe_fe");
    var sexe_m = document.getElementById("sexe_manquant");

    var naissance = document.getElementById("naissance").valueAsDate;
    var naissance_m = document.getElementById("naissance_manquante");
    // var naissance_v = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
    // Pour vérifier la présence de données, il faut utiliser la propriété validity de l'objet Element //
    // Pour vérifier qu'un champ n'est pas vide, il faut utiliser la propriété valueMissing qui renvoie true si un champ possédant un attribut required est vide //
    // Dans le cas où valueMissing renvoie true, il faut bloquer le formulaire avec preventDefault() et renvoyer un message d'erreur //
    // preventDefault() est une méthode de l'objet Event qui va annuler le déclenchement d'un évènement si celui-ci est annulable //

    var adresse = document.getElementById("adresse");
    var adresse_m = document.getElementById("adresse_manquante");
    // * est un symbole qui indique que le caractère qui le précède peut apparaître 0, 1 ou plusieurs fois //
    var adresse_v = /([a-zA-Z,\. ]*)?([a-zA-Z]*)/;
    
    var code_postal = document.getElementById("code_postal");
    var code_postal_m = document.getElementById("code_postal_manquant");
    // On demande à ce que le code postal comprenne 5 chiffres entre 0 et 9 //
    var code_postal_v = /^[0-9]{5}$/;
    
    var ville = document.getElementById("ville");
    var ville_m = document.getElementById("ville_manquante");
    var ville_v = /^[A-zA-ZéèîïÉÈÎÏ][A-zA-Zéèêàçîï]+([-'\s][A-zA-ZéèîïÉÈÎÏ][A-zA-Zéèêàçîï])?([-'\s][A-zA-ZéèîïÉÈÎÏ][A-zA-Zéèêàçîï]+)?$/;
    
    var email = document.getElementById("email");
    var email_m = document.getElementById("email_manquant");
    // On demande à ce que l'adresse mail comporte des lettres, des chiffres, des points et des tirets ----- un symbole @ ----- des caractères comme au début mais en minuscule et au moins deux ----- un point ----- des caractères de 2 à 4 lettres minuscules //
    var email_v = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,252}\.[a-z]{2,4}$/;
    
    var sujet = document.getElementById("sujet");
    var sujet_m = document.getElementById("sujet_manquant");
    
    var question = document.getElementById("question");
    var question_m = document.getElementById("question_manquante");
    
    var customCheck1 = document.getElementById("customCheck1");
    var customCheck1_m = document.getElementById("customCheck1_manquant");

    // element.validity.valueMissing renvoie un objet de type Boolean. Si une valeur n'a pas été entré dans un champs de saisie requis //
    // event.preventDefault() annule l'évènement si il est annulable, ce qui signifie que l'action par défaut qui appartient à l'évènement ne se produira pas. Ici il empêchera de soumettre le formulaire //
    
    // NOM
    
    if(nom.validity.valueMissing)
    {
        event.preventDefault();
        nom_m.textContent = "Le champ nom est vide";
        nom_m.style.color = "white";
        nom_m.style.background = "#F51308";
        nom_m.style.textAlign = "center";
        nom_m.style.padding = "10px";
    }
    // Ensuite on vérifie la qualité des données //
    else if(nom_v.test(nom.value) == false) // nom.value fait appel à l'ID du formulaire
    {
        event.preventDefault();
        nom_m.textContent = "Le format pour le nom est incorrect";
        nom_m.style.color = "white";
        nom_m.style.background = "#F51308";
        nom_m.style.textAlign = "center";
        nom_m.style.padding = "10px";
    }
    else
    {
        nom_m.textContent = "✔";
        nom_m.style.background = "green";
        nom_m.style.textAlign = "center";
        nom_m.style.padding = "10px";
    }
    
    // PRENOM

    if(prenom.validity.valueMissing)
    {
        event.preventDefault();
        prenom_m.textContent = "Le champ prénom est vide";
        prenom_m.style.color = "white";
        prenom_m.style.background = "#F51308";
        prenom_m.style.textAlign = "center";
        prenom_m.style.padding = "10px";
    }
    else if(prenom_v.test(prenom.value) == false)
    {
        event.preventDefault();
        prenom_m.textContent = "Le format pour le prénom est incorrect"
        prenom_m.style.color = "white";
        prenom_m.style.background = "#F51308";
        prenom_m.style.textAlign = "center";
        prenom_m.style.padding = "10px";
    }
    else
    {
        prenom_m.textContent = "✔";
        prenom_m.style.background = "green";
        prenom_m.style.textAlign = "center";
        prenom_m.style.padding = "10px";
    }

    // SEXE

    if((!sexe_ma.checked && !sexe_fe.checked))
    {
        event.preventDefault();
        sexe_m.textContent = "Veuillez sélectionner une des deux cases";
        sexe_m.style.color = "white";
        sexe_m.style.background = "#F51308";
        sexe_m.style.textAlign = "center";
        sexe_m.style.padding = "10px";
    }
    else
    {
        sexe_m.textContent = "✔";
        sexe_m.style.background = "green";
        sexe_m.style.textAlign = "center";
        sexe_m.style.padding = "10px";
    }

    // DATE DE NAISSANCE

    if(naissance == null || naissance.getFullYear() < 1900 || naissance.getFullYear() >= 2019) 
    {
        event.preventDefault();
        naissance_m.textContent = "Le champ naissance est vide ou l'année saisie est incorrecte";
        naissance_m.style.color = "white";
        naissance_m.style.background = "#F51308";
        naissance_m.style.textAlign = "center";
        naissance_m.style.padding = "10px";
    }
    else
    {
        naissance_m.textContent = "✔";
        naissance_m.style.background = "green";
        naissance_m.style.textAlign = "center";
        naissance_m.style.padding = "10px";
    }

    // CODE POSTAL

    if(code_postal.validity.valueMissing)
    {
        event.preventDefault();
        code_postal_m.textContent = "Le champ code postal est vide";
        code_postal_m.style.color = "white";
        code_postal_m.style.background = "#F51308";
        code_postal_m.style.textAlign = "center";
        code_postal_m.style.padding = "10px";
    }
    else if(code_postal_v.test(code_postal.value) == false)
    {
        event.preventDefault();
        code_postal_m.textContent = "Le format pour le code postal est incorrect"
        code_postal_m.style.color = "white";
        code_postal_m.style.background = "#F51308";
        code_postal_m.style.textAlign = "center";
        code_postal_m.style.padding = "10px";
    }
    else
    {
        code_postal_m.textContent = "✔";
        code_postal_m.style.background = "green";
        code_postal_m.style.textAlign = "center";
        code_postal_m.style.padding = "10px";
    }

    // ADRESSE

    if(adresse.validity.valueMissing)
    {
        event.preventDefault();
        adresse_m.textContent = "Le champ adresse est vide";
        adresse_m.style.color = "white";
        adresse_m.style.background = "#F51308";
        adresse_m.style.textAlign = "center";
        adresse_m.style.padding = "10px";
    }
    else if(adresse_v.test(adresse.value) == false)
    {
        event.preventDefault();
        adresse_m.textContent = "Le format pour l'adresse est incorrect"
        adresse_m.style.color = "white";
        adresse_m.style.background = "#F51308";
        adresse_m.style.textAlign = "center";
        adresse_m.style.padding = "10px";
    }
    else
    {
        adresse_m.textContent = "✔";
        adresse_m.style.background = "green";
        adresse_m.style.textAlign = "center";
        adresse_m.style.padding = "10px";
    }

    // VILLE

    if(ville.validity.valueMissing)
    {
        event.preventDefault();
        ville_m.textContent = "Le champ ville est vide";
        ville_m.style.color = "white";
        ville_m.style.background = "#F51308";
        ville_m.style.textAlign = "center";
        ville_m.style.padding = "10px";
    }
    else if(ville_v.test(ville.value) == false)
    {
        event.preventDefault();
        ville_m.textContent = "Le format pour la ville est incorrect"
        ville_m.style.color = "white";
        ville_m.style.background = "#F51308";
        ville_m.style.textAlign = "center";
        ville_m.style.padding = "10px";
    }
    else
    {
        ville_m.textContent = "✔";
        ville_m.style.background = "green";
        ville_m.style.textAlign = "center";
        ville_m.style.padding = "10px";
    }

    // EMAIL

    if(email.validity.valueMissing)
    {
        event.preventDefault();
        email_m.textContent = "Le champ email est vide";
        email_m.style.color = "white";
        email_m.style.background = "#F51308";
        email_m.style.textAlign = "center";
        email_m.style.padding = "10px";
    }
    else if(email_v.test(email.value) == false)
    {
        event.preventDefault();
        email_m.textContent = "Le format pour l'email est incorrect"
        email_m.style.color = "white";
        email_m.style.background = "#F51308";
        email_m.style.textAlign = "center";
        email_m.style.padding = "10px";
    }
    else
    {
        email_m.textContent = "✔";
        email_m.style.background = "green";
        email_m.style.textAlign = "center";
        email_m.style.padding = "10px";
    }

    // SUJET

    if(sujet.validity.valueMissing)
    {
        event.preventDefault();
        sujet_m.textContent = "Veuillez sélectionner un sujet";
        sujet_m.style.color = "white";
        sujet_m.style.background = "#F51308";
        sujet_m.style.textAlign = "center";
        sujet_m.style.padding = "10px";
    }
    else
    {
        sujet_m.textContent = "✔";
        sujet_m.style.background = "green";
        sujet_m.style.textAlign = "center";
        sujet_m.style.padding = "10px";
    }

    // QUESTION

    if(question.validity.valueMissing)
    {
        event.preventDefault();
        question_m.textContent = "Le champ question est vide";
        question_m.style.color = "white";
        question_m.style.background = "#F51308";
        question_m.style.textAlign = "center";
        question_m.style.padding = "10px";
    }
    else
    {
        question_m.textContent = "✔";
        question_m.style.background = "green";
        question_m.style.textAlign = "center";
        question_m.style.padding = "10px";
    }

    // ACCORD

    if(customCheck1.validity.valueMissing)
    {
        event.preventDefault();
        customCheck1_m.textContent = "Vous devez cocher cette case";
        customCheck1_m.style.color = "white";
        customCheck1_m.style.background = "#F51308";
        customCheck1_m.style.textAlign = "center";
        customCheck1_m.style.padding = "10px";
    }
    else
    {
        customCheck1_m.textContent = "✔";
        customCheck1_m.style.background = "green";
        customCheck1_m.style.textAlign = "center";
        customCheck1_m.style.padding = "10px";
    }

}

validation.addEventListener("click", f_valid);