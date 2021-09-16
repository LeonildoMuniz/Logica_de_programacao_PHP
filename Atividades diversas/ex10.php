<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Definir configurações iniciais -->
        <meta charset = "utf-8">
        <meta name = "description" content = "Listar de numeros">
        <meta name = "keywords" content = "html, php">
        <meta name = "robots" content = "ex10.php">
        <title> Numeros </title>
       
    </head>
    <body>
<!-- Nav = Onde insire o menu de navagação no href, direciona para onde desejar um link -->
        <nav>
            <a href = "ex10.php" title = "Home"><h3>Home<h3></a>
        </nav>

<!-- Header = Titulo da aba -->
        <header>
           <h1>Lista de numeros<h1>
           <hr/>
        </header>


<!-- Main = meio do assunto principal-->
        <main>
            <center><h1>Lista de numeros</h1></center>
            <br/><br/>
    

<!-- Cria um botão para inserir um valor-->
             <form action = "ex10.php" method = "POST">
                <label>Digite o primeiro número: </label>
                <input type = "number" name ="num1" required class="form-control"/><br/>
                <label>Digite o segundo número: </label>
                <input type = "number" name ="num2" required class="form-control"/><br/>
                <input type = "submit" value = "Calcular"class="btn btn-primary"> <hr/>
                <hr/>
                <br/><br/>
            </form>
        </main>     
<!--mostrar frase chamndo pelo php-->        
       
        <?php
        if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            if($num1<$num2){
                for($i=$num1;$i<=$num2;$i++){
                    echo $i. "<br/>";
                }
            }
            else{
                for($i=$num1;$i>=$num2;$i--){
                    echo $i. "<br/>";
                }
            }
           
        }


        ?>


<!-- footer = fina da pagina ropadé -->
        <footer>
        <p><b> Desenvolvimento Leonildo Muniz</b></p>
        </footer>

    </body>
</html>