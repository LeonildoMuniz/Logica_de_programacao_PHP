<?php
    $arquivo = fopen("produtos.txt", "r");
    $arquivo2 = fopen("produtos2.txt","a+");
    while(!feof($arquivo))
    {
        $produto = explode("|",fgets($arquivo));
    }

    fclose($arquivo);
    $posicao = $_GET['posicao'];
    $codigo = $_POST['codigo'];
    $descricao = $_POST['descricao'];
    $ingredientes = $_POST['ingredientes'];
    $preco = $_POST['preco'];
    $produto[$posicao] = $codigo;
    $produto[$posicao+1] = $descricao;
    $produto[$posicao+2] = $ingredientes;
    $produto[$posicao+3] = $preco;

    unlink("produtos.txt");
    rename("produtos2.txt","produtos.txt");
    $arquivo = fopen("produtos.txt","a+");
    $contador = count($produto);
    $i=0;
    while($i <= $contador - 1)
    {
        $gravar = $produto[$i]."|";
        fwrite($arquivo,$gravar);
        $i++;
    }
        fclose($arquivo2);
        fclose($arquivo);
        echo"<script>
                alert('Produto editado com sucesso!');
                window.location.href='index.php';
                </script>";


?>