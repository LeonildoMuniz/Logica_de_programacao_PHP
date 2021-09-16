<!DOCTYPE html>
<html lang="pt-br">



<head>
        <!-- Definir configurações iniciais -->
        <meta charset = "utf-8">
        <meta name = "description" content = "Conversão de temperatura">
        <meta name = "keywords" content = "html, php">
        <meta name = "robots" content = "ex02.php">
        <title> Conversão de temperatura </title>

    </head>

    
<!-- Nav = Onde insire o menu de navagação no href, direciona para onde desejar um link -->
<nav>
            <a href = "ex02.php" title = "Home">Inicio</a>
        </nav>

<!-- Header = Titulo da aba -->
        <header>
           <h1>Temperatura<h1>
           <hr/>
        </header>


<!-- Main = meio do assunto principal-->
        <main>
            <center><h1> Conversão de temperatura </h1></center>
            <br/><br/>

            <!-- Cria um botão para inserir um valor-->
            <form action = "ex02.php" method = "POST">
                <label>Digite a temperatura em graus Celsius : </label><br>
                <input type = "number" name ="graus" required/><br/>
                <input type = "submit" value = "Calcular" />
                <br/><br/>
            </form>
        </main>     

        <?php
             if(isset($_POST['graus'])){
                $graus = $_POST['graus']; 
                $temperatura = (5*($graus-32)/9);
                echo"<hr/><br>";
                echo"<br>Temperatura em graus Celsius de: <b>$temperatura</b> graus Fahrenheit";
             }else{
                echo"Digite os valores para calcular a conversão de temperatura!";
             }
        ?>

        <!-- footer = fina da pagina ropadé -->
        <footer>
        <p><b> Desenvolvimento Leonildo Muniz</b></p>
        </footer>

    </body>
</html>