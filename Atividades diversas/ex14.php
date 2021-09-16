<?php
    $a=array(
        array("Primeiro", "Segundo"),
        array("Terceiro", "Quarto")
    );
    print_r($a);
    echo"<br/>";
    print_r($a[0][1]);
    echo"<br/>";
    print_r($a[1][0]);
    echo"<br/>";
    echo $a[1][0]." ".$a[1][1]." ".$a[0][0]." ".$a[0][1];
?>