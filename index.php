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
    <?php 
    include("_menu.php");
    ?>
        <div class="container text-center" style="max-width:100%;border: 1px solid black;height:800px;margin-top:20px;background-image: url('IMAGE/img1.jpg');background-size: cover;">
            <h1 style="margin-top: 300px;color:gold">Vous avez besoin d'un compagnon, <br>Adoptez-moi</h1>
            <form action="resultat.php" method="get" class="form-inline md-form mr-9 mb-4">
                <input name="rechercher" class="form-control col-lg-4 offset-lg-4 col-md-12" type="text" placeholder="Nom, Type ou Râce" aria-label="Rechercher">
                <button class="btn btn-primary aqua-gradient btn-rounded btn-lg-4" type="submit">Rechercher</button>
            </form>
        </div>
            <div class="section-1 section-1-marg" style="margin-top: -150px;">
                <h3>Liste des compagnons à adopter</h3>
                    <?php
                    foreach($animaux as $animal):
                    ?>
                    <div class="list-inline" style="margin-left: 100px;">
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
        include("_footer.php");
        ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
</body>

</html>