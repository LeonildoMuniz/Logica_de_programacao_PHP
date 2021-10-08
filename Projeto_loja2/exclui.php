<?php
    $posicao = $_GET['posicao'];
    $arquivo = fopen("produtos.txt", "r");
    $arquivo2 = fopen("produtos2.txt", "a+");
    while(!feof($arquivo))
    {
        $produto = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    $exclui = $posicao + 4;
    for($i = $posicao; $i < $exclui; $i++)
    {
       unset($produto[$i]); 
    }
    $dado = array();
    foreach($produto as $produto2)
    {
        $dado[] = $produto2;
    }
    unlink("produtos.txt");
    rename("produtos2.txt","produtos.txt");
    $arquivo = fopen("produtos.txt","a+");
    $contador = count($dado);
    $i=0;
    while($i <= $contador - 1)
    {
        $gravar = $dado[$i]."|";
        fwrite($arquivo,$gravar);
        $i++;
    }
        fclose($arquivo2);
        fclose($arquivo);
        echo"<script>
                alert('Produto excluido com sucesso!');
                window.location.href='index.php';
                </script>";
?>