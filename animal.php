<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title><?php echo $animal["nom"]?></title>
</head>

<body>
    <?php 
    include("_menu.php");

    $csv = fopen('csv/animaux.csv', 'rb');
    while(! feof($csv)) {
        $lines[] = fgets($csv);
    }
    $n = count($lines);
    for ($i = 0; $i < $n; $i++){
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
    
        if($_GET['id'] == $animal["id"]){?>
        <div class="container">
            
        <div class="section-1 section-1-marg">
            <h2>Informations sur <?=$animal["nom"]?></h2>
            <div class="list-inline">
                <label>Nom du compagnon : <?=$animal["nom"]?> </label><br>
                <label>Type du compagnon : <?=$animal["type"]?> </label><br>
                <label>Race du compagnon : <?=$animal["race"]?> </label><br>
                <label>Âge du compagnon : <?=$animal["age"]?> </label><br>
                <label>Description du compagnon : <?=$animal["description"]?> </label><br>
                <label>Courriel : <a href="mailto:<?=$animal["courriel"]?>">Contactez-moi sur ce lien !</a> </label><br>
                <h3>Adresse de récuperation :</h3>
                <label>Adresse civique : <?=$animal["adresse-civique"]?> </label><br>
                <label>Ville : <?=$animal["ville"]?> </label><br>
                <label>Code postale : <?=$animal["code-postale"]?> </label><br>
                
            </div> 
        </div>
    <?php
        }
    }
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
