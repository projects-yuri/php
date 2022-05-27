<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Exercicio 01</title>
</head>
<body>
<?php
    $countries = ['Janeiro', 'Fevereiro', 'Março', 'Abril',
    'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro',
    'Novembro', 'Dezembro'];

    $number = $_GET["number"];

    if($number > 0 && $number <= 12)
    {
        $number-= 1;
        echo "<p>O número digitado corresponde ao mês de <strong>$countries[$number]</strong>.</p>";
    }
    else if($number == 0)
    {
        $number+= 1;
        echo "<p>O número digitado não corresponde a nenhum número, mas o primeiro mês é <strong>Janeiro</strong>.</p>";
    }
    else
    {
        echo "<p>O número digitado não corresponde a nenhum número. Digite um número entre <strong>1 e 12</strong>.</p>";
    }
?>
    <a href="./index.html">Digitar outro número</a>
</body>
</html>
