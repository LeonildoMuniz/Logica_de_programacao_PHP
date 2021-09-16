<?php
    $arr=array("primeiro valor", "segundo valor", "terceiro valor");
    echo"valor inicial da minha array é: <br/>";
    print_r($arr);
    echo"<br/><br/>";

    $arr[] = 'quarto valor';
    $arr[] = 'quinto valor';
    
    echo"Agora a nossa array é: <br/>";
    print_r($arr);
    echo"<br/>";

?>