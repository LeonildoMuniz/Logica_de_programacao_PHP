<!DOCTYPE html>
<html lang="pt-br">



<head>
        <!-- Definir configurações iniciais -->
        <meta charset = "utf-8">
        <meta name = "description" content = "Nota aluno">
        <meta name = "keywords" content = "html, php">
        <meta name = "robots" content = "ex05.php">
        <title> Reajuste salarial </title>

    </head>

    
<!-- Nav = Onde insire o menu de navagação no href, direciona para onde desejar um link -->
<nav>
            <a href = "ex05.php" title = "Home">Inicio</a>
        </nav>

<!-- Header = Titulo da aba -->
        <header>
           <h1>Nota aluno<h1>
           <hr/>
        </header>


<!-- Main = meio do assunto principal-->
        <main>
            <center><h1> Calculo de nota do aluno </h1></center>
            <br/><br/>

            <!-- Cria um botão para inserir um valor-->
            <form action = "ex05.php" method = "POST">
                <label>Digite a nota 1 do aluno : </label><br>
                <input type = "number" name ="n1" required/><br/>
                <label>Digite a nota 2 do aluno : </label><br>
                <input type = "number" name ="n2" required/><br/>
                <input type = "submit" value = "Calcular" />
                <br/><br/>
            </form>
        </main>     

        <?php

  

             if(isset($_POST['n1'])){

                $n1 = $_POST['n1']; 
                $n2 = $_POST['n2']; 

                $nota1=$n1;
                $nota2=$n2;
                $media =($n1+$n2)/2;


                if($media>=9 and $media<10){
                    echo"<b><h1>Nota 1: $nota1</b></h1>";
                    echo"<b><h1>Nota 2: $nota2</b></h1>";
                    echo"<b><h1>média: $media</b></h1><br>";
                    echo"<hr/><br>";
                    echo"<b><h1>Conceito A!</b></h1><br>";

                }elseif($media>=7.5 and $media<9){
                    echo"<b><h1>Nota 1: $nota1</b></h1>";
                    echo"<b><h1>Nota 2: $nota2</b></h1>";
                    echo"<b><h1>média: $media</b></h1><br>";
                    echo"<hr/><br>";
                    echo"<b><h1>Conceito B!</b></h1><br>";

                }elseif($media>=6 and $media<7.5){
                    echo"<b><h1>Nota 1: $nota1</b></h1>";
                    echo"<b><h1>Nota 2: $nota2</b></h1>";
                    echo"<b><h1>média: $media</b></h1><br>";
                    echo"<hr/><br>";
                    echo"<b><h1>Conceito C!</b></h1><br>";

                }elseif($media>=4 and $media<6){
                    echo"<b><h1>Nota 1: $nota1</b></h1>";
                    echo"<b><h1>Nota 2: $nota2</b></h1>";
                    echo"<b><h1>média: $media</b></h1><br>";
                    echo"<hr/><br>";
                    echo"<b><h1>Conceito D!</b></h1><br>";

                }elseif($media>=0 and $media<4){
                    echo"<b><h1>Nota 1: $nota1</b></h1>";
                    echo"<b><h1>Nota 2: $nota2</b></h1>";
                    echo"<b><h1>média: $media</b></h1><br>";
                    echo"<hr/><br>";
                    echo"<b><h1>Conceito E!</b></h1><br>";

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