<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Definir configurações iniciais -->
        <meta charset = "utf-8">
        <meta name = "description" content = "Aplicativo maior de idade">
        <meta name = "keywords" content = "html, php">
        <meta name = "robots" content = "maioridade.php">
        <title> Maioridade </title>

    </head>
    <body>

<!-- Nav = Onde insire o menu de navagação no href, direciona para onde desejar um link -->
        <nav>
            <a href = "maioridade.php" title = "Home">Inicio</a>
        </nav>

<!-- Header = Titulo da aba -->
        <header>
           <h1>Maioridade<h1>
           <hr/>
        </header>


<!-- Main = meio do assunto principal-->
        <main>
            <center><h1> Aplicativo maioridade</h1></center>
            <br/><br/>
    

<!-- Cria um botão para inserir um valor-->
             <form action = "maioridade.php" method = "POST">
                <label>Digite seu nome: </label>
                <input type = "text" name ="nome" required/><br/>
                <label>Digite seu idade: </label>
                <input type = "number" name ="idade" required/><br/>
                <input type = "submit" value = "Calcular" />
                <br/><br/>
            </form>
        </main>     
<!--mostrar frase chamndo pelo php-->        
       
        <?php
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            if($idade>=18){
                Echo "<br><b>$nome</b>, é maior de idade, tem <b>$idade</b) anos";
            }
            else{
                echo "<br><b>$nome</b>, não é maior de idade, tem <b> $idade </b> anos";
            }
        }
        else{
            Echo "<b>Por favor digite o nome e a idade!<b>";
        }

        ?>


<!-- footer = fina da pagina ropadé -->
        <footer>
        <p><b> Desenvolvimento Leonildo Muniz</b></p>
        </footer>

    </body>
</html>