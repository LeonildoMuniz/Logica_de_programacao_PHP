<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Definir configurações iniciais -->
        <meta charset = "utf-8">
        <meta name = "description" content = "Página de exemplo HTML PHP">
        <meta name = "keywords" content = "html, php">
        <meta name = "robots" content = "index2.php">
        <title> HTML - PHP </title>

    </head>
    <body>
<!-- Header = Titulo da aba -->
        <header>
           <h1>HTML - PHP<h1>
        </header>


<!-- Nav = Onde insire o menu de navagação no href, direciona para onde desejar um link -->
        <nav>
            <a href = "index2.php" title = "Home">Inicio</a>
        </nav>


<!-- Main = meio do assunto principal-->
        <main>
            <h1> Olá! Bem vindo so exemplo de HTML com PHP!</h1>
            <br/><br/>
    

<!-- Cria um botão para inserir um valor-->
             <form action = "index2.php" method = "POST">
                <label>Digite uma frase</label>
                <input type = "text" name ="frase" required/>
                <input type = "submit" value = "Mostrar" />
                <br/><br/>
            </form>
        </main>     
<!--mostrar frase chamndo pelo php-->        
       
        <?php
        if(isset($_POST['frase'])){
            $frase = $_POST['frase'];
            echo $frase;
        }
        else{
            Echo "Nenhuma frase digitada";
        }

        ?>


<!-- footer = fina da pagina ropadé -->
        <footer>
        <p><b> Desenvolvimento Leonildo Muniz</b></p>
        </footer>

    </body>
</html>