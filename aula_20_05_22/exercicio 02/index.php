<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Exercicio 02</title>
</head>
<body>
    <h1>Números aleatórios:</h1>
    <?php
    $array = [];
    for($i = 0; $i < 5; $i++)
    {
        $array[$i] = rand(1, 10);
        echo "<p>$array[$i]</p>";
    }
    ?>
</body>
</html>