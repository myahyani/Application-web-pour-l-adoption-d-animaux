<?php
$animal=$_GET["id"];
if($animal=="Toronto"){
    $img="img/hero-toronto.jpg";
    $title="DÉCOUVREZ LE CÔTÉ LOCAL DE <span class=\"text-primary\">TORONTO</span><br>REJOIGNEZ-NOUS POUR UNE VISITE GUIDÉE PAR DES EXPERTS";
    $paragraph="L'équipe YahyaniTour Toronto propose des visites régulières tout au long de l'année (y compris nos célèbres visites à pied) et est le fournisseur officiel des aventures urbaines à Toronto. Nos guides sont également disponibles pour animer des visites pour des voyages scolaires, des événements spéciaux, des familles, des individus et des groupes de toutes sortes. Les guides qui dirigent nos visites de la ville sont engageants, divertissants et experts dans tout ce qui concerne Toronto !.";
    $Duration="60 minutes";
    $Price="$ 279 ";
}elseif($animal=="Vancouver"){
    $img="img/hero-Vancouver.jpg";
    $title="VOIR <span class=\"text-primary\">VANCOUVER</span> SOUS UNE LUMIÈRE DIFFÉRENTE <br>EXPÉRIMENTER CETTE VILLE DIVERSÉE À LA MANIÈRE LOCALE";
    $paragraph="Bénéficiant d'une vue imprenable sur les montagnes et les criques, une histoire riche mais tumultueuse et une culture diversifiée et progressive, Vancouver est une métropole comme peu d'autres. Nos guides locaux sont idéalement placés pour partager les hauts et déballer les bas dans cette ville de contrastes, et illustreront les histoires du passé fascinant de Vancouver avec des arrêts dans les attractions importantes de Vancouver ainsi que dans certains de leurs sites moins connus préférés.";
    $Duration="120 minutes";
    $Price="$159";
}else{
    header("Location: page-not-found.php");
}
?>