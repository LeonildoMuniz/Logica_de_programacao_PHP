<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Definir configurações iniciais -->
        <meta charset = "utf-8">
        <meta name = "description" content = "Listar nome">
        <meta name = "keywords" content = "html, php">
        <meta name = "robots" content = "ex07.php">
        <title> Nome </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
<!-- Nav = Onde insire o menu de navagação no href, direciona para onde desejar um link -->
        <nav>
            <a href = "ex07.php" title = "Home"><h3>Home<h3></a>
        </nav>

<!-- Header = Titulo da aba -->
        <header>
           <h1>Nome<h1>
           <hr/>
        </header>


<!-- Main = meio do assunto principal-->
        <main>
            <center><h1> Repetição de nome</h1></center>
            <br/><br/>
    

<!-- Cria um botão para inserir um valor-->
             <form action = "ex07.php" method = "POST">
                <label>Digite seu nome: </label>
                <input type = "text" name ="nome" required class="form-control"/><br/>
                <input type = "submit" value = "Calcular"class="btn btn-primary"> <hr/>
                <hr/>
                <br/><br/>
            </form>
        </main>     
<!--mostrar frase chamndo pelo php-->        
       
        <?php
        if(isset($_POST['nome'])){
            $nome1 = $_POST['nome'];

      
                for($i=0;$i<=10;$i++){
                    echo "$i - Nome: $nome1 <br/>";
                }
         }

        ?>


<!-- footer = fina da pagina ropadé -->
        <footer>
        <p><b> Desenvolvimento Leonildo Muniz</b></p>
        </footer>

    </body>
</html>