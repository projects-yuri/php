<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Resultado</title>
</head>

<style>
    p {
        font-size: 100px;
        text-align: center;
        margin-top: 20%;    
    }
</style>

<body>

<?php

$num01 = $_GET['num01'];
$num02 =  $_GET['num02'];
$num03 =  $_GET['num03'];

$media = ($num01 + $num02 + $num03)/3;

echo("<p>A média dos números é: $media</p>");
?>

</body>
</html>

