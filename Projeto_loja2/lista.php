<?php
    $arquivo = fopen("produtos.txt", "r");
    while(!feof($arquivo))
    {
        $dado = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ingredientes</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $numero = count($dado);
                        $i = 0;
                        while($i <= $numero-4)
                        {
                    ?>
                    <th scope = "row"><?php echo $dado[$i]; ?></th>
                    <td><?php echo $dado[$i+1]; ?></td>
                    <td><?php echo $dado[$i+2]; ?></td>
                    <td><?php echo $dado[$i+3]; ?></td>
                    <td><a href="editar.php?posicao=<?php echo $i; ?>"><button type="button" class="btn btn-outline-success">Editar</button></a> | <a href="exclui.php?posicao=<?php echo $i; ?>"><button type="button" class="btn btn-outline-danger">Excluir</button></a></td>
                <?php
                    $i = $i + 4;
                    echo "</tr>";
                        }
                ?>
            </tbody>
        </table>
    </body>
</html>