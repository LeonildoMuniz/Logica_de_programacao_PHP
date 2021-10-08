<?php
    class Handler
    {
        public static function arrayHandler()
        {
            $a = [];
            $a['codigo'] = $_POST['codigo'];
            $a['descricao'] = $_POST['descricao'];
            $a['preco'] = $_POST['preco'];

            $gravar = $_POST['codigo']."|".$_POST['descricao']."|".$_POST['preco']."|";
            $arquivo = fopen('produtos.txt', 'a+');
            fwrite($arquivo, $gravar);
            fclose($arquivo);
            return $a;
        }
    }
?>