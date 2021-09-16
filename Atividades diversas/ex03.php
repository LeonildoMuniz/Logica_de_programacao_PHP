<!DOCTYPE html>
<html lang="pt-br">



<head>
        <!-- Definir configurações iniciais -->
        <meta charset = "utf-8">
        <meta name = "description" content = "Calculo de número impar">
        <meta name = "keywords" content = "html, php">
        <meta name = "robots" content = "ex02.php">
        <title> Calculo número impar </title>

    </head>

    
<!-- Nav = Onde insire o menu de navagação no href, direciona para onde desejar um link -->
<nav>
            <a href = "ex03.php" title = "Home">Inicio</a>
        </nav>

<!-- Header = Titulo da aba -->
        <header>
           <h1>Número Impar<h1>
           <hr/>
        </header>


<!-- Main = meio do assunto principal-->
        <main>
            <center><h1> Verificação de número impar </h1></center>
            <br/><br/>

            <!-- Cria um botão para inserir um valor-->
            <form action = "ex03.php" method = "POST">
                <label>Digite um número inteiro para verificação : </label><br>
                <input type = "number" name ="int" required/><br/>
                <input type = "submit" value = "Calcular" />
                <br/><br/>
            </form>
        </main>     

        <?php

                echo"<hr/><br>";

             if(isset($_POST['int'])){
                $int = $_POST['int']; 
                $impar = $int % 2;
                if($impar == 0){
                    echo"<b><h1>Número é par!</b></h1><br>";
                }else{
                    echo"<b><h1>Número é impar!</b></h1><br>";
                }

             }
             else{
                echo"Digite o valor para verificação!";
             }
 
            
        ?>

        <!-- footer = fina da pagina ropadé -->
        <footer>
        <p><b> Desenvolvimento Leonildo Muniz</b></p>
        </footer>

    </body>
</html>