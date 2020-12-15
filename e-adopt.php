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
    header('Location: merci.php');
    exit;
}

header('Location: index.php');
exit;

?>
