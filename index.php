<?php
$csv = fopen('csv/animaux.csv', 'rb');

$lines = [];
while(! feof($csv)) {
    $lines[] = fgets($csv);    
}
unset($lines[0]);
shuffle($lines);

$animaux = [];
$n = count($lines);
for ($i = 0; $i < $n && $i < 5; $i++){
    $line = $lines[$i];

    $elements = explode(",", $line);

    $animal["id"] = $elements[0];
    $animal["nom"] = $elements[1];
    $animal["type"] = $elements[2];
    $animal["race"] = $elements[3];
    $animal["age"] = $elements[4];
    $animal["description"] = $elements[5];
    $animal["courriel"] = $elements[6];
    $animal["adresse-civique"] = $elements[7];
    $animal["ville"] = $elements[8];
    $animal["code-postale"] = $elements[9];

    $animaux[] = $animal;
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
    <?php 
    include("menu.php");
    ?>
    <div class="bagr-pg">
        <div class="header">
            <h1 class="display">Vous avez besoin d'un compagnon, <br>Adoptez-moi</h1>
            <form class="form-inline md-form mr-9 mb-4 recherche">
                <input class="form-control col-lg-4 col-md-8" type="text" placeholder="Nom, Type ou Râce" aria-label="Rechercher">
                <button class="btn btn-primary aqua-gradient btn-rounded btn-lg-4" type="submit">Rechercher</button>
            </form>
        </div>
    </div>
    <div class="section-1 section-0-marg">
            <?php
            foreach($animaux as $animal):
            ?>
            <div class="list-inline">
                <label>Nom du compagnon : <?=$animal["nom"]?> </label><br>
                <label>Type du compagnon : <?=$animal["type"]?> </label><br>
                <a href="animal.php?id=<?=$animal["id"]?>" class="btn btn-primary btn-lg">
                    Plus details
                </a>
            </div>
                <hr>
            <?php
            endforeach;
            ?>
    </div>

    <!--  FOOTER START -->
        <?php
        include("footer.php");
        ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

</body>

</html>