<?php

$idade = 18;
$habil = true;

$tst = '';
if ($habil == true){
    $tst = 'Sim';
}    
else{
    $tst = 'Não';
}

echo('Idade = '.$idade."<br>");
echo('Habilitação = '.$tst."<br>");

if ($idade >= 18){
    if ($habil == true){
        echo('Você pode dirigir');
    }
    else {
        echo('Apesar de ter idade, você não possui habilitação, então não pode dirigir');
    }
}
else {
    if ($habil == true){
        echo('Apesar de ter habilitação, você não tem idade suficiente para dirigir, então não pode dirigir');
    }
    else {
        ('Você não pode dirigir');
    }
}
?>