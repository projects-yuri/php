<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <style>
        body
        {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        p
        {
            color: white;
            text-align: center;
            font-weight: 400;
        }
    </style>
    <title>Conversão</title>
</head>
<body>
    <?php
        $option = $_GET["option"];
        $tpr = $_GET["temperature"];

        if($option == 'ctof')
        {
            echo "<p>Convertendo de Celsius para Fahrenheit, na temperatura de $tpr.</p>";
            function ctof($tmpr)
            {
                $fahrenheit = 1.8*$tmpr + 32;
                echo "<br><p>A temperatura em Fahrenheit é $fahrenheit.</p>";
            }

            ctof($tpr);
        }
        else
        {
            echo "<p>Convertendo de Fahrenheit para Celsius, na temperatura de $tpr.</p>";
            function ftoc($tmpr)
            {
                $celsius = ($tmpr - 32) / 1.8;
                echo "<br><p>A temperatura em Celsius é $celsius.</p>";
            }

            ftoc($tpr);
        }
    ?>
    <a href="./conversao.html">Voltar</a>
</body>
</html>