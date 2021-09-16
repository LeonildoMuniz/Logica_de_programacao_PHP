<!DOCTYPE html>
<html lang="pt-br">



<head>
        <!-- Definir configurações iniciais -->
        <meta charset = "utf-8">
        <meta name = "description" content = "Calculo de combustivel">
        <meta name = "keywords" content = "html, php">
        <meta name = "robots" content = "ex01.php">
        <title> Calculo de combustivel </title>

    </head>

    
<!-- Nav = Onde insire o menu de navagação no href, direciona para onde desejar um link -->
<nav>
            <a href = "ex01.php" title = "Home">Inicio</a>
        </nav>

<!-- Header = Titulo da aba -->
        <header>
           <h1>Combustivel<h1>
           <hr/>
        </header>
 

<!-- Main = meio do assunto principal-->
        <main>
            <center><h1> Calculo de combustivel</h1></center>
            <br/><br/>

            <!-- Cria um botão para inserir um valor-->
            <form action = "ex01.php" method = "POST">
                <label>Digite o total de quilometros percorrido: </label><br>
                <input type = "number" name ="quilometro" required/><br/>
                <label>Digite a quantidade de litros utilizada: </label><br>
                <input type = "number" name ="litros" required/><br/>
                <input type = "submit" value = "Calcular" />
                <br/><br/>
            </form>
        </main>     

        <?php
            if(isset($_POST['quilometro'])){
                $quilometro = $_POST['quilometro'];
                $litros = $_POST['litros'];   
                $consumo = $quilometro/$litros;
                echo"<hr/><br>";
                echo"Media de consumo de combustivel de: <b>$consumo</b> por quilomentro rodado<br>";
                echo"<br>Total de quilometros rodados de: <b>$quilometro</b><br>";
                echo"<br>Total de litros utilizados de: <b>$litros</b>";

            }else{
                echo"Digite os valores para calcular!";
            }

        ?>

        <!-- footer = fina da pagina ropadé -->
        <footer>
        <p><b> Desenvolvimento Leonildo Muniz</b></p>
        </footer>

    </body>
</html>