<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">

    <title>Mise en adoption</title>
</head>

<body>
    <div class="info">
        Appelez-nous au : +1 (514) 863-2918 📞| De 7h à 17h | 5j / 7j
    </div>
    <?php 
    include("menu.php");
    ?>
    
    <div class="container">
    <div class="section-1 section-1-marg">
        <h2 class="font-weight-bold" style="margin-top: 8%;margin-left: 8%;margin-bottom: 2%;">
            Mise un compagnon en adoption
        </h2>
        <form name="adopt" action="e-adopt.php" onsubmit="validerForm(event)" method="post" style="margin-left: 2%;">
            <!--Nom-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="nom" class="col-form-label col-sm-6 text-right">Nom du compagnon</label>
                <div class="col-sm-6">
                    <input class="form-control" id="nom" name="nom" type="text">
                    <span id="erreur-nom" style="color: red;"></span>
                </div>
            </div>
            <!--Type-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="type" class="col-form-label col-sm-6 text-right">Type du compagnon</label>
                <div class="col-sm-6">
                    <input class="form-control" id="type" name="type" type="text">
                    <span id="erreur-type" style="color: red;"></span>
                </div>
            </div>
            <!--Race-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="race" class="col-form-label col-sm-6 text-right">Race du compagnon</label>
                <div class="col-sm-6">
                    <input class="form-control" id="race" name="race" type="text">
                    <span id="erreur-race" style="color: red;"></span>
                </div>
            </div>
            <!--Age-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="race" class="col-form-label col-sm-6 text-right">L'Âge du compagnon</label>
                <div class="col-sm-6">
                    <input class="form-control" id="age" name="age" type="number">
                    <span id="erreur-age" style="color: red;"></span>
                </div>
            </div>
            <!--Description-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="descr" class="col-form-label col-sm-6 text-right">Description</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="descr" name="descr"></textarea>
                    <span id="erreur-descr" style="color: red;"></span>
                </div>
            </div>
            <!--Email-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="email" class="col-form-label col-sm-6 text-right">Adresse courriel</label>
                <div class="col-sm-6">
                    <input class="form-control" id="email" name="email" type="text">
                    <span id="erreur-email" style="color: red;"></span>
                </div>
            </div>
            <!--Adresse-->
            <!--Adresse civique-->
            <h3 style="margin-top: 8%;margin-left: 8%;margin-bottom: 2%;">
                Adresse de récuperation
            </h3>
            <div class="form-group row justify-content-center col-sm-8">
                <label for="adrciv" class="col-form-label col-sm-6 text-right">Adresse civique</label>
                <div class="col-sm-6">
                    <input class="form-control" id="adrciv" name="adrciv" type="text">
                    <span id="erreur-adrciv" style="color: red;"></span>
                </div>
            </div>
            <!--Ville-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="ville" class="col-form-label col-sm-6 text-right">Ville</label>
                <div class="col-sm-6">
                    <input class="form-control" id="ville" name="ville" type="text">
                    <span id="erreur-ville" style="color: red;"></span>
                </div>
            </div>
            <!--Code postal-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="codpos" class="col-form-label col-sm-6 text-right">Code postale</label>
                <div class="col-sm-6">
                    <input class="form-control" id="codpos" name="codpos" type="text">
                    <span id="erreur-codpos" style="color: red;"></span>
                </div>
            </div>
            <!--Submit-->
            <div>
                <input type="submit" class="btn btn-primary btn-lg" value="Envoyer">
                <input type="reset" class="btn btn-primary btn-lg" value="Réinitialiser">
            </div>
        </form>
    </div>
    </div>
    <!--  FOOTER START -->
    <?php
        include("footer.php");
        ?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>