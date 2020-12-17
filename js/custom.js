function validerForm(e) {
    e.preventDefault();
    var erreurNom = document.getElementById("erreur-nom");
    erreurNom.textContent = "";
    var erreurType = document.getElementById("erreur-type");
    erreurType.textContent = "";
    var erreurRace = document.getElementById("erreur-race");
    erreurRace.textContent = "";
    var erreurDescr = document.getElementById("erreur-descr");
    erreurDescr.textContent = "";
    var erreurAge = document.getElementById("erreur-age");
    erreurAge.textContent = "";
    var erreurEmail = document.getElementById("erreur-email");
    erreurEmail.textContent = "";
    var erreurAdrciv = document.getElementById("erreur-adrciv");
    erreurAdrciv.textContent = "";
    var erreurVille = document.getElementById("erreur-ville");
    erreurVille.textContent = "";
    var erreurCodPos = document.getElementById("erreur-codpos");
    erreurCodPos.textContent = "";

    var nom = document.getElementById("nom");
    var type = document.getElementById("type");
    var race = document.getElementById("race");
    var descr = document.getElementById("descr");
    var age = document.getElementById("age");
    var email = document.getElementById("email");
    var adrciv = document.getElementById("adrciv");
    var ville = document.getElementById("ville");
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
    } else if (nom.value.match(/^[^,]$/)) {
        erreurNom.textContent = "Le format du nom est incorrect.";
        nom.focus();
        return false;
    }

    if (!type.value.length) {
        erreurType.textContent = "Entrez le type du compagnon.";
        type.focus();
        window.scrollTo(0, 0);
        return false;
    } else if (!type.value.match(/^[A-Za-z' ']+$/)) {
        erreurType.textContent = "Le format du type est incorrect.";
        type.focus();
        window.scrollTo(0, 0);
        return false;
    } else if (type.value.match(/^[^,]$/)) {
        erreurType.textContent = "Le format du type est incorrect.";
        type.focus();
        return false;
    }

    if (!race.value.length) {
        erreurRace.textContent = "Entrez la race du compagnon.";
        race.focus();
        window.scrollTo(0, 0);
        return false;
    } else if (!race.value.match(/^[A-Za-z' ']+$/)) {
        erreurRace.textContent = "La race de la race est incorrect.";
        race.focus();
        window.scrollTo(0, 0);
        return false;
    } else if (race.value.match(/^[^,]$/)) {
        erreurRace.textContent = "Le format de la race est incorrect.";
        race.focus();
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
    } else if (!age.value.match(/^\d{1,2}$/)) {
        erreurAge.textContent = "Le format d'âge est incorrect.";
        age.focus();
        return false;
    }

    if (!descr.value.length) {
        erreurDescr.textContent = "Entrez la description du compagnon.";
        descr.focus();
        window.scrollTo(0, 0);
        return false;
    } else if (!descr.value.match(/^[a-zA-Z0-9" "]+$/)) {
        erreurDescr.textContent = "Le format de la description est incorrect.";
        descr.focus();
        return false;
    } else if (descr.value.match(/^[^,]$/)) {
        erreurDescr.textContent = "Le format de la description est incorrect.";
        descr.focus();
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
    } else if (email.value.match(/^[^,]$/)) {
        erreurEmail.textContent = "Le format d'email est incorrect.";
        email.focus();
        return false;
    }

    if (!adrciv.value.length) {
        erreurAdrciv.textContent = "Entrez l'adresse civique du compagnon.";
        adrciv.focus();
        return false;
    } else if (!adrciv.value.match(/^[a-zA-Z0-9" "]+$/)) {
        erreurAdrciv.textContent = "Le format d'adresse civique est incorrect.";
        adrciv.focus();
        return false;
    } else if (adrciv.value.match(/^[^,]$/)) {
        erreurAdrciv.textContent = "Le format d'adresse civique est incorrect.";
        adrciv.focus();
        return false;
    }

    if (!ville.value.length) {
        erreurVille.textContent = "Entrez la ville du compagnon.";
        ville.focus();
        return false;

    } else if (!ville.value.match(/^[a-zA-Z0-9" "]+$/)) {
        erreurVille.textContent = "Le format de la ville est incorrect.";
        ville.focus();
        return false;
    } else if (ville.value.match(/^[^,]$/)) {
        erreurVille.textContent = "Le format de la ville est incorrect.";
        ville.focus();
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
    } else if (code_postale.value.match(/^[^,]$/)) {
        erreurCodPos.textContent = "Le format du code postale est incorrect.";
        code_postale.focus();
        return false;
    }

    document.adopt.submit();
}