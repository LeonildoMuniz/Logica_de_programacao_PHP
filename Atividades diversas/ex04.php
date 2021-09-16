<!DOCTYPE html>
<html lang="pt-br">



<head>
        <!-- Definir configurações iniciais -->
        <meta charset = "utf-8">
        <meta name = "description" content = "Calcuo de salario">
        <meta name = "keywords" content = "html, php">
        <meta name = "robots" content = "ex02.php">
        <title> Reajuste salarial </title>

    </head>

    
<!-- Nav = Onde insire o menu de navagação no href, direciona para onde desejar um link -->
<nav>
            <a href = "ex04.php" title = "Home">Inicio</a>
        </nav>

<!-- Header = Titulo da aba -->
        <header>
           <h1>Reajuste salarial<h1>
           <hr/>
        </header>


<!-- Main = meio do assunto principal-->
        <main>
            <center><h1> Reajuste salarial </h1></center>
            <br/><br/>

            <!-- Cria um botão para inserir um valor-->
            <form action = "ex04.php" method = "POST">
                <label>Digite o valor do salario para verificação : </label><br>
                <input type = "number" name ="sal" required/><br/>
                <input type = "submit" value = "Calcular" />
                <br/><br/>
            </form>
        </main>     

        <?php

  

             if(isset($_POST['sal'])){

                $sal = $_POST['sal']; 
                if($sal<=280){
                    $salarioat=$sal;
                    $reajuste=$sal*0.2;
                    $salario = $sal*1.2;
                    echo"<b><h1>Salario anterior de: R$ $salarioat</b></h1><br>";
                    echo"<b><h1>Valor do aumento: R$ $reajuste</b></h1><br>";
                    echo"<b><h1>Novo salario com aumento de 20% seu salario será de: R$ $salario</b></h1><br>";
                }elseif($sal>280 and $sal<=700){
                    $salarioat=$sal;
                    $reajuste=$sal*0.15;
                    $salario = $sal*1.15;
                    echo"<b><h1>Salario anterior de: R$ $salarioat</b></h1><br>";
                    echo"<b><h1>Valor do aumento: R$ $reajuste</b></h1><br>";
                    echo"<b><h1>Reajuste de 15% seu salario será de: R$ $salario</b></h1><br>";
                }elseif($sal>700 and $sal<=1500){
                    $salarioat=$sal;
                    $reajuste=$sal*0.1;
                    $salario = $sal*1.1;
                    echo"<b><h1>Salario anterior de: R$ $salarioat</b></h1><br>";
                    echo"<b><h1>Valor do aumento: R$ $reajuste</b></h1><br>";
                    echo"<b><h1>Reajuste de 10% seu salario será de: R$ $salario</b></h1><br>";

                }elseif($sal>1500){
                    $salarioat=$sal;
                    $reajuste=$sal*0.05;
                    $salario = $sal*1.05;
                    echo"<b><h1>Salario anterior de: R$ $salarioat</b></h1><br>";
                    echo"<b><h1>Valor do aumento: R$ $reajuste</b></h1><br>";
                    echo"<b><h1>Reajuste de 5% seu salario será de: R$ $salario</b></h1><br>";

                }

             }
             else{
                echo"Digite o salario atual!";
             }
 
            
        ?>

        <!-- footer = fina da pagina ropadé -->
        <footer>
        <p><b> Desenvolvimento Leonildo Muniz</b></p>
        </footer>

    </body>
</html>