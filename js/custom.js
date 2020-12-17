function validerForm(e) {
    e.preventDefault();
    var erreurNom = document.getElementById("erreur-nom");
    erreurNom.textContent = "";
    var erreurAge = document.getElementById("erreur-age");
    erreurAge.textContent = "";
    var erreurEmail = document.getElementById("erreur-email");
    erreurEmail.textContent = "";
    var erreurCodPos = document.getElementById("erreur-codpos");
    erreurCodPos.textContent = "";

    var nom = document.getElementById("nom");
    var age = document.getElementById("age");
    var email = document.getElementById("email");
    var code_postale = document.getElementById("codpos");

    if (!nom.value.length) {
        erreurNom.textContent = "Entrez le nom du compagnon.";
        nom.focus();
        window.scrollTo(0, 0);
        return false;
    } else if (!nom.value.match(/^[A-Za-z' ']+$/)) {
        erreurNom.textContent = "Le format du nom est incorrect.";
        nom.focus();
        window.scrollTo(0, 0);
        return false;
    } else if (nom.value.length > 20 || nom.value.length < 3) {
        erreurNom.textContent = "Le format du nom est incorrect.";
        nom.focus();
        window.scrollTo(0, 0);
        return false;
    }

    if (!age.value.length) {
        erreurAge.textContent = "Entrez l'âge du compagnon.";
        age.focus();
        window.scrollTo(0, 0);
        return false;
    } else if (age.value > 30 || age.value < 0) {
        erreurAge.textContent = "L'âge doit être entre 0 et 30.";
        age.focus();
        window.scrollTo(0, 0);
        return false;
    }

    if (!email.value.length) {
        erreurEmail.textContent = "Entrez votre Email.";
        email.focus();
        return false;
    } else if (!email.value.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
        erreurEmail.textContent = "Le format d'email est incorrect.";
        email.focus();
        return false;
    }

    if (!code_postale.value.length) {
        erreurCodPos.textContent = "Entrez votre Code postale.";
        code_postale.focus();
        return false;
    } else if (!code_postale.value.match(/^[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]+$/)) {
        erreurCodPos.textContent = "Entrez un code postale valide.";
        code_postale.focus();
        return false;
    }

    document.adopt.submit();
}