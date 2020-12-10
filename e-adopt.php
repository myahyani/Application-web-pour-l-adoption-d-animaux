<?php
if (!empty($_POST)){
    $csv = fopen('csv/animaux.csv', 'rb');
    while(! feof($csv)) {
        $line = fgets($csv);    
    }
    $elements = explode(",", $line);
    $id = $elements[0];
    $id = (int) substr($line, 1);
    $id += 1;
    $text= "\nX".$id.",".$_POST["nom"].",".$_POST["type"].",".$_POST["race"].",".$_POST["age"].",".$_POST["descr"].",".$_POST["email"].",".$_POST["adrciv"].",".$_POST["ville"].",".$_POST["codpos"];
    file_put_contents('csv/animaux.csv', $text, FILE_APPEND);
}

?>
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
    <div class="info">
        Appelez-nous au : +1 (514) 863-2918 📞| De 7h à 17h | 5j / 7j
    </div>
    <div class="nav">
        <ul>
            <li>
                <a href="contact.html">Contactez-nous</a>
            </li>
            <li>
                <a href="info.html">Informations</a>
            </li>
            <li>
                <a href="mise-en-adoption.html">Mise en adoption</a>
            </li>
            <li>
                <a href="index.php">Acceuil</a>
            </li>
            <li class="logo">
                <a href="index.php">Adoptez<span class="text-primary"> moi</span></a>
            </li>
        </ul>
    </div>
    <div class="section-0 section-0-1-marg">
            <div class="section-4">
                <h1 class="text-capitalize font-weight-bold" style="margin-top: 10%;margin-left: 8%;margin-bottom: 2%;" id="texteenreg">Merci,<br> Le compagnon est ajoutée dans notre base de données.</h1>
            </div>
        </div>
    <!--  FOOTER START -->

    <div class="footer">
        <div class="inner-footer">
            <div>
                <h2>Adoptez<span class="text-primary"> moi</span></h2>
                <p></p>
            </div>
            <div>
                <h3>Liens rapides</h3>
                <ul class="menufo">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="info.html">Informations</a></li>
                    <li><a href="contact.html">Contactez-nous</a></li>
                </ul>
            </div>
            <div>
                <h3>Contactez-nous</h3>
                <ul class="menufo">
                    <li>120 Rue Sainte-Catherine Sud, Montréal, QC H2L 2C4 </li>
                    <li>Adoptezmoi@gmail.com</li>
                    <li>+1 (514) 863-2918</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

</body>

</html>