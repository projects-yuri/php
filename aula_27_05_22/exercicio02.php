<?php
    $numbers = [3, 5, 8, 10, 20, 23, 57];
    $total = null;

    // Criar uma função para somar os valores de um vetor
    function soma($array)
    {
        $soma = null;
        for($i = 0; $i < count($array); $i++)
        {
            $soma += $array[$i];
            if($array[$i] % 2 == 1)
            {
                echo "$array[$i] <br>";
            }
        }
        echo "A soma é: $soma";
    }
    soma($numbers);
?>