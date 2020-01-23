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

    var identifiant = document.getElementById("login");
    var identifiant_m = document.getElementById("login_manquant");
    var identifiant_v = /^[a-zA-Z0-9]+$/;

    var password = document.getElementById("password");
    var password_m = document.getElementById("password_manquant");
    var password_v = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;
    // Mot de passe qui doit comporter de 8 à 15 caractères, au moins une lettre minuscule, au moins une lettre majuscule, au moins un chiffre, au moins un de ces caractères spéciaux: $ @ % * + - _ !, aucun autre caractère possible: pas de & ni de { par exemple) 

    var conf_password = document.getElementById("conf_password");
    var conf_password_m = document.getElementById("conf_password_manquant");
    var conf_password_v = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;
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

if(identifiant.validity.valueMissing)
{
    event.preventDefault();
    identifiant_m.textContent = "Le champ login est vide";
    identifiant_m.style.color = "white";
    identifiant_m.style.background = "#F51308";
    identifiant_m.style.textAlign = "center";
    identifiant_m.style.padding = "10px";
}
else if(identifiant_v.test(identifiant.value) == false)
{
    event.preventDefault();
    identifiant_m.textContent = "Le format pour le login est incorrect"
    identifiant_m.style.color = "white";
    identifiant_m.style.background = "#F51308";
    identifiant_m.style.textAlign = "center";
    identifiant_m.style.padding = "10px";
}
else
{
    identifiant_m.textContent = "✔";
    identifiant_m.style.background = "green";
    identifiant_m.style.textAlign = "center";
    identifiant_m.style.padding = "10px";
}

// PASSWORD

if(password.validity.valueMissing)
{
    event.preventDefault();
    password_m.textContent = "Le champ mot de passe est vide";
    password_m.style.color = "white";
    password_m.style.background = "#F51308";
    password_m.style.textAlign = "center";
    password_m.style.padding = "10px";
}
else if(password_v.test(password.value) == false)
{
    event.preventDefault();
    password_m.textContent = "Le format pour le mot de passe est incorrect"
    password_m.style.color = "white";
    password_m.style.background = "#F51308";
    password_m.style.textAlign = "center";
    password_m.style.padding = "10px";
}
else
{
    password_m.textContent = "✔";
    password_m.style.background = "green";
    password_m.style.textAlign = "center";
    password_m.style.padding = "10px";
}

// CONFIRMATION PASSWORD

if(conf_password.validity.valueMissing)
{
    event.preventDefault();
    conf_password_m.textContent = "Le champ confirmation du mot de passe est vide";
    conf_password_m.style.color = "white";
    conf_password_m.style.background = "#F51308";
    conf_password_m.style.textAlign = "center";
    conf_password_m.style.padding = "10px";
}
else if(conf_password_v.test(conf_password.value) == false)
{
    event.preventDefault();
    conf_password_m.textContent = "Le format pour la confirmation du mot de passe est incorrect"
    conf_password_m.style.color = "white";
    conf_password_m.style.background = "#F51308";
    conf_password_m.style.textAlign = "center";
    conf_password_m.style.padding = "10px";
}
else if(conf_password.value !== password.value)
{
    event.preventDefault();
    conf_password_m.textContent = "Les deux mots de passe sont différents"
    conf_password_m.style.color = "white";
    conf_password_m.style.background = "#F51308";
    conf_password_m.style.textAlign = "center";
    conf_password_m.style.padding = "10px"; 
}
else
{
    conf_password_m.textContent = "✔";
    conf_password_m.style.background = "green";
    conf_password_m.style.textAlign = "center";
    conf_password_m.style.padding = "10px";
}

}

validation.addEventListener("click", f_valid2);