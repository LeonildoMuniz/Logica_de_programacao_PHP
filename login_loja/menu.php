<?php
    include 'conecta.php';
    $usuario= $_SESSION["user"];
    $menu_query = "SELECT * FROM usuario WHERE login='".$usuario."'AND tipo='Administrador'";
    $result=$conn->query($menu_query);
    if($result->num_rows>0){
        echo "<a href='loja.php'button type='button' class='btn btn-outline-dark'>Home </a>";
        echo "<a href='usuario.php'button type='button' class='btn btn-outline-dark'>USUÁRIO </a>";
        echo "<a href='sair.php'button type='button' class='btn btn-outline-dark'>Sair</a>";

    }
    else{
        echo "<a href='loja.php'button type='button' class='btn btn-outline-dark'>Home </a>";
        echo "<a href='sair.php'button type='button' class='btn btn-outline-dark'>Sair</a>";
    }
?>
