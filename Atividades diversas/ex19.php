<?php
    $carros=array("Gol", "Onix", "hb20", "S10","Ranger");

    print_r($carros);
    echo "<br/>";
    
    echo "Posição 3:<b> ".$carros[2]."</b><br/>";
    echo "<hr>";

    $carros[]="Creta";
    $carros[]="Mobi";
    $carros[]="Toro";
    $carros[]="Strada";
    $carros[]="Fusca";

    print_r($carros);
    echo "<br/>";

    echo "Posição 8:<b> ".$carros[7]."</b>";

?>