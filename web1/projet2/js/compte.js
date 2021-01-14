function surligne(champ, erreur) {
    if (erreur)
        champ.style.backgroundColor = "#fba";
    else
        champ.style.backgroundColor = "";
}

function verifNom(champ) {
    if (champ.value.length < 2 || champ.value.length > 12) {
        surligne(champ, true);
        return false;
    } else {
        surligne(champ, false);
        return true;
    }
}

function verifPrenom(champ) {
    if (champ.value.length < 2 || champ.value.length > 12) {
        surligne(champ, true);
        return false;
    } else {
        surligne(champ, false);
        return true;
    }
}

function verifMail(champ) {
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

    if (!regex.test(champ.value)) {
        surligne(champ, true);
        return false;
    } else {
        surligne(champ, false);
        return true;
    }
}

function verifPassword(champ) {
    if (champ.value.length < 6 || champ.value.length > 16) {
        surligne(champ, true);
        return false;
    } else {
        surligne(champ, false);
        return true;
    }

}

/*function verifCpassword(champ)
{
    var ps = verifPassword(this);

    if(champ.value != ps)
}*/

function verifForm() {
    var NomOk = verifNom(document.nom);
    var PrenomOk = verifPrenom(document.prenom);
    var EmailOk = verifMail(document.Email);
    var PasswordOk = verifPassword(document.password);

    if (NomOk && PrenomOk && EmailOk && PasswordOk)
        return true;
    else {
        alert(" Veillez remplir tous les champs correctement ");
        return false;
    }
}