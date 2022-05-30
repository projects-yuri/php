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
            display: unset;
            overflow: unset;
        }
        p
        {
            color: white;
            display: inline;
        }
    </style>
    <title>Pirâmide</title>
</head>
<body>
    <?php
        $number = $_GET["number"];

        if($number > 0)
        {
            function pyramid($num)
            {
                for($i = 1; $i <= $num; $i++)
                {
                    for($a = 1; $a < $i; $a++)
                    {
                        echo "<p>$a,</p>";
                    }
                    echo "<p>$i</p><br>";
                }
            }
            
            pyramid($number);
        }
        else
        {
            function nPyramid($num)
            {
                for($i = -1; $i >= $num; $i--)
                {
                    for($a = -1; $a > $i; $a--)
                    {
                        echo "<p>$a,</p>";
                    }
                    echo "<p>$i</p><br>";
                }
            }

            nPyramid($number);
        }

    ?>
    <a href="./index.html">Voltar</a>
</body>
</html>