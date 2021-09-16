<?php
    $arr=array("primeiro valor", "segundo valor", "terceiro valor");
    echo"valor inicial da minha array é: <br/>";
    print_r($arr);
    echo"<br/><br/>";

    $arr[] = 'quarto valor';
    $arr[] = 'quinto valor';
    
    echo"Agora a nossa array é: <br/>";
    print_r($arr);
    echo"<br/>";
    echo"<hr/>";

    $array = array(
        "chave1" =>1,
        "chave2" =>"PHP",
        "chave3" => "Array"

    );

    echo $array["chave2"];
    echo"<br/>";
    echo $array["chave3"];
    echo"<br/>";
    echo"<hr/>";
    
    $arr=array("nome"=>"Rafael", "sobrenome"=>"Marques", "idade"=>"25");
    print_r($arr);

    echo"<br/><br/>";
    echo"Nome: <b>".$arr["nome"]."</b><br/>";
    echo "Sobrenome: <b>".$arr["sobrenome"]."</b><br/>";
    echo "Idade: <b>".$arr["idade"]."</b>";

    echo"<br/>";
    echo"<hr/>";

    $cores = array("Azul", "Vermelho", "Amarelo", "Verde");
    print_r($cores);
    echo"<br/>";
    foreach($cores as $value){
        echo "$value<br/>";
    }

    echo"<br/>";
    echo"<hr/>";

    $funcionarios = array(
        array("nome"=>"Alex", "Idade"=>21, "salario"=>1285,27, "ativo"=>true),
        array("nome"=>"Emerson", "Idade"=>35, "salario"=>3885,27, "ativo"=>false),
        array("nome"=>"Osvaldo", "Idade"=>54, "salario"=>5285,27, "ativo"=>true),
    );
    
    $bonificacao=10;

    foreach($funcionarios as $funcionario){
        if($funcionario["ativo"]){
            $funcionario["salario"]+=$funcionario["salario"]*($bonificacao/100);
            echo "Funcionario: {$funcionario['nome']}-{$funcionario['salario']}\n";
        }else{
            echo "Funcionario: {$funcionario['nome']}-INATIVO\n";
        }
    }


?>