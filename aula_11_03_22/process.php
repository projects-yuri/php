<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <style>
        p {
            color: green;
        }
    </style>
</head>

<body>

<?php

$num = $_REQUEST['numero_01'];
$num2 = $_REQUEST['numero_02'];

$soma = $num + $num2;

echo("<p>O resultado da soma é: $soma</p>");

?>
</body>
</html>


