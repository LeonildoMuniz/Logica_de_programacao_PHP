<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <form action="cad.php" method="POST">
            <div class="form-group">
                <label>Código</label>
                <input type="number" class="form-control" name="codigo" placeholder="Insira o código do produto" required/>
                <br/>
                <label>Descrição</label>
                <input type="text" class="form-control" name="descricao" placeholder="Insira a descrição do produto" required/>
                <br/>
                <label>Preço</label>
                <input type="number" class="form-control" name="preco" placeholder="Insira o valor do produto" required name="price" min="0" value="0" step="any"/>
                <br/>
                <button type="submit" class="btn btn-warning">Cadastrar</button>
            </div>
        </form>
    </body>
</html>