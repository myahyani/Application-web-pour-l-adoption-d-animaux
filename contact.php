<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Adpot me</title>
</head>

<body>
    <?php 
    include("_menu.php");
    ?>
    <div class="section-1 section-1-marg">
        <div class="section-4">
            <div>
                <p>
                    <strong>Adresse postale :</strong> 120 Rue Sainte-Catherine Sud, Montréal, QC H2L 2C4
                </p>
                <p>
                    <strong>Numéro de téléphone :</strong> +1 (514) 863-2918
                </p>
                <p>
                    <strong>Adresse messagerie :</strong>
                    <a id="mailtext" href="mailto:Adoptcompagnon@gmail.com">Adoptcompagnon@gmail.com</a>
                </p>
            </div>
            <div class="inline">
                <div class="input-group1">
                    <label for="Nom">Nom*</label><br>
                    <input class="input-text1" id="Nom" name="Nom" type="text" pattern="[A-Za-z' ']+" required>
                </div>
                <div class="input-group1">
                    <label for="Prenom">Prénom*</label><br>
                    <input class="input-text1" id="Prenom" name="Prenom" type="text" pattern="[A-Za-z' ']+" required>
                </div>
            </div>

            <div class="inline">
                <div class="input-group1">
                    <label for="email">Adresse messagerie*</label><br>
                    <input class="input-text1" id="email" name="email" type="text" pattern="[A-Za-z' ']+" required>
                </div>
                <div class="input-group1">
                    <label for="ntele">Numéro de téléphone*</label><br>
                    <input class="input-text1" id="ntele" name="ntele" type="tel" required>
                </div>
            </div>
            <label for="quescomm">Votre question ou commentaire*</label><br>
            <textarea class="input-text justify-content-center" name="quescomm" id="quescomm" cols="165" rows="10" required></textarea>
            <div class="wid-alite">
                <input type="submit" class="btn btn-primary btn-lg" value="Envoyer">
            </div>

        </div>
    </div>

    <!--  FOOTER START -->

    <?php
        include("_footer.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

</body>

</html>