<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'teste_mysqli';

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao ->connect_error)
{
    die('Conexão falhou '. $conn -> connect_error);
}
else
{
    echo 'Conectado com sucesso';
}

?>