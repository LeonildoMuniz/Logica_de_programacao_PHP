<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Definir configurações iniciais -->
        <meta charset = "utf-8">
        <meta name = "description" content = "Calculo tabuada">
        <meta name = "keywords" content = "html, php">
        <meta name = "robots" content = "ex06.php">
        <title> Tabuada </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>

<!-- Nav = Onde insire o menu de navagação no href, direciona para onde desejar um link -->
        <nav>
            <a href = "ex06.php" title = "Home"><h3>Home<h3></a>
        </nav>

<!-- Header = Titulo da aba -->
        <header>
           <h1>Tabuada<h1>
           <hr/>
        </header>


<!-- Main = meio do assunto principal-->
        <main>
            <center><h1> Calculo de tabuada</h1></center>
            <br/><br/>
    

<!-- Cria um botão para inserir um valor-->
             <form action = "ex06.php" method = "POST">
                <label>Digite o valor entre 0 e 10 para calcular a tabuada: </label>
                <input type = "number" name ="numero" required class="form-control"/><br/>
                <input type = "submit" value = "Calcular"class="btn btn-primary"> <hr/>
                <hr/>
                <br/><br/>
            </form>
        </main>     
<!--mostrar frase chamndo pelo php-->        
       
        <?php
        if(isset($_POST['numero'])){
            $numero = $_POST['numero'];

            if($numero>=0 and $numero<=10 ){
                for($i=0;$i<=10;$i++){

                    $result = $numero*$i;
                    echo "Resultado de $numero x $i = <b>$result</b> <br/>";
                }

             }
             else{
                 echo "<script language = 'javascript' type='text/javascript'>
                alert('Só serão aceitos valores entrte 0 e 10');
                 window.location.href='ex06.php';
                 </script>";
             }
        }

        ?>


<!-- footer = fina da pagina ropadé -->
        <footer>
        <p><b> Desenvolvimento Leonildo Muniz</b></p>
        </footer>

    </body>
</html>