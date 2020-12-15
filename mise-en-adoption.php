<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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
        <form name="adopt" action="e-adopt.php" onsubmit="validForm()" method="post" style="margin-left: 2%;">
            <!--Nom-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="nom" class="col-form-label col-sm-6 text-right">Nom du compagnon</label>
                <div class="col-sm-6">
                    <input class="form-control" id="nom" name="nom" type="text" required><!--pattern="[A-Za-z' ']+" minlength="3" maxlength="20"-->
                </div>
            </div>
            <!--Type-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="type" class="col-form-label col-sm-6 text-right">Type du compagnon</label>
                <div class="col-sm-6">
                    <input class="form-control" id="type" name="type" type="text"  required><!--pattern="[A-Za-z' ']+"-->
                </div>
            </div>
            <!--Race-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="race" class="col-form-label col-sm-6 text-right">Race du compagnon</label>
                <div class="col-sm-6">
                    <input class="form-control" id="race" name="race" type="text" required><!--pattern="[A-Za-z' ']+"--> 
                </div>
            </div>
            <!--Age-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="race" class="col-form-label col-sm-6 text-right">L'Âge du compagnon</label>
                <div class="col-sm-6">
                    <input class="form-control" id="age" name="age" type="number" required><!--min="0" max="30" -->
                </div>
            </div>
            <!--Description-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="descr" class="col-form-label col-sm-6 text-right">Description</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="descr" name="descr" pattern="[A-Za-z' ']+" required></textarea>
                </div>
            </div>
            <!--Email-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="email" class="col-form-label col-sm-6 text-right">Adresse courriel</label>
                <div class="col-sm-6">
                    <input class="form-control" id="email" name="email" type="email" required>
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
                    <input class="form-control" id="adrciv" name="adrciv" type="text" required>
                </div>
            </div>
            <!--Ville-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="ville" class="col-form-label col-sm-6 text-right">Ville</label>
                <div class="col-sm-6">
                    <input class="form-control" id="ville" name="ville" type="text" required>
                </div>
            </div>
            <!--Code postal-->
            <div class="form-group row justify-content-center col-sm-8">
                <label for="codpos" class="col-form-label col-sm-6 text-right">Code postale</label>
                <div class="col-sm-6">
                    <input class="form-control" id="codpos" name="codpos" type="text" required> <!--pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]"-->
                </div>
            </div>
            <!--Submit-->
            <div>
                <input type="submit" class="btn btn-primary btn-lg" value="Envoyer">
            </div>
        </form>
    </div>
    </div>
    <!--  FOOTER START -->
    <?php
        include("footer.php");
        ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

    <script>
        function validForm() 
        { 
            var nom = document.forms["adopt"]["nom"];               
            /*var type = document.forms["adopt"]["type"];    
            var race = document.forms["adopt"]["race"];*/  
            var age =  document.forms["adopt"]["age"];  
            /*var descreption = document.forms["adopt"]["descr"];*/
            var email = document.forms["adopt"]["email"];  
            /*var adresse_civique = document.forms["adopt"]["adrciv"]; 
            var ville = document.forms["adopt"]["ville"];*/
            var code_postale = document.forms["adopt"]["codpos"]; 

            if (nom.length < 3 || nom.length > 20 || nom == "") 
          { 
            <?="Le nom doit être entre 3 et 20 caractéres."?>; 
          } 
            if (age < 0 || age > 30 || age == "") 
          { 
                <?="L'âge doit être entre 0 et 30 ans."?>; 
            }    
            if (email.value == "")                                   
          { 
            <?="Mettez une adresse email valide."?>; 
               
          if (email.value.indexOf("@", 0) < 0)                 
          { 
            <?="Mettez une adresse email valide."?>; 
          }    
          if (email.value.indexOf(".", 0) < 0)                 
          { 
            <?="Mettez une adresse email valide."?>; 
          }    
            if (code_postale != /^[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]*$/) 
          { 
                <?="Entrez un code postale valide."?>; 
          }    
        }
    </script>
</body>

</html>