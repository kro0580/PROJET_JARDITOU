var validation = document.getElementById("bouton_envoi2");

function f_valid2()
{
    var nom = document.getElementById("nom");
    var nom_m = document.getElementById("nom_manquant");
    var nom_v = /^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/;

    var prenom = document.getElementById("prenom");
    var prenom_m = document.getElementById("prenom_manquant");
    var prenom_v = /^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/;

    var email = document.getElementById("email");
    var email_m = document.getElementById("email_manquant");
    var email_v = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,252}\.[a-z]{2,4}$/;

    var login = document.getElementById("login");
    var login_m = document.getElementById("login_manquant");
    var login_v = /^[a-zA-Z0-9]+$/;

    var password = document.getElementById("password");
    var password_m = document.getElementById("password_manquant");
    var password_v = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;
    // Mot de passe qui doit comporter de 8 à 15 caractères, au moins une lettre minuscule, au moins une lettre majuscule, au moins un chiffre, au moins un de ces caractères spéciaux: $ @ % * + - _ !, aucun autre caractère possible: pas de & ni de { par exemple) 

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

// LOGIN

if(login.validity.valueMissing)
{
    event.preventDefault();
    login_m.textContent = "Le champ login est vide";
    login_m.style.color = "white";
    login_m.style.background = "#F51308";
    login_m.style.textAlign = "center";
    login_m.style.padding = "10px";
}
else if(login_v.test(login.value) == false)
{
    event.preventDefault();
    login_m.textContent = "Le format pour le login est incorrect"
    login_m.style.color = "white";
    login_m.style.background = "#F51308";
    login_m.style.textAlign = "center";
    login_m.style.padding = "10px";
}
else
{
    login_m.textContent = "✔";
    login_m.style.background = "green";
    login_m.style.textAlign = "center";
    login_m.style.padding = "10px";
}

// PASSWORD

if(password.validity.valueMissing)
{
    event.preventDefault();
    login_m.textContent = "Le champ login est vide";
    login_m.style.color = "white";
    login_m.style.background = "#F51308";
    login_m.style.textAlign = "center";
    login_m.style.padding = "10px";
}
else if(login_v.test(login.value) == false)
{
    event.preventDefault();
    login_m.textContent = "Le format pour le login est incorrect"
    login_m.style.color = "white";
    login_m.style.background = "#F51308";
    login_m.style.textAlign = "center";
    login_m.style.padding = "10px";
}
else
{
    login_m.textContent = "✔";
    login_m.style.background = "green";
    login_m.style.textAlign = "center";
    login_m.style.padding = "10px";
}

}

validation.addEventListener("click", f_valid2);