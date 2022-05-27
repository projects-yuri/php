<?php
    echo "1 - Função sem retorno e sem parametros <br>";
    function teste()
    {
        echo "Teste de função";
    }
    teste();
    echo "<hr>";

    echo "2 - Função com retorno e sem parametros <br>";
    function teste2()
    {
        $retorno = "Outro texto";
        return $retorno;
    }
    $recebe = teste2();
    // Variavel $retorno não é útil fora do escopo da função.
    echo $recebe;
    echo "<hr>";

    echo "3 - Função sem retorno e com parametros <br>";
    function teste3($a)
    {
        echo "$a <br>";
    }
    teste3('Oi galera');
    teste3('Aula de SW-I');
    echo "<hr>";

    echo "4 - Função com retorno e com parametros <br>";
    function teste4($x, $y, $z)
    {
        $soma = $x + $y - $z;
        return $soma;
    }
    $result = teste4(4, 5, 4);
    echo "O resultado é $result";
    echo "<hr>";
?>