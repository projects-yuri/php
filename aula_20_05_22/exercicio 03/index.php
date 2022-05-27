<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Exercicio 03</title>
</head>
<body>
    <?php
        $array = [];
        $total = null;

        for($i = 0; $i < 10; $i++)
        {
            $array[$i] = rand(1, 100);
            $total += $array[$i];
            echo "<p>$array[$i]</p>";
        }
        echo "<p> Total: $total</p>";
        $media = $total / 10;
        echo "<p>A média é: $media</p>";
    ?>
</body>
</html>