<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02: Números</title>
</head>
<body>
    <?php 
    function odd($num){
        return $num % 2 ==1;
    }
    
    function even($num){
        return $num % 2 == 0;
    }

    $numbers = array(5,8,4,3,1,0,8,6,4,9,11,4); ?>
<h1>Os numeros são</h1>

<ul>
<?php foreach ($numbers as $number) {
            echo "<li> $number </li>";
        }
           ?>

    <h1>Os numeros pares são:</h1>
    <ul>
        <?php 
        $pares = array_filter($numbers, "even"); 
        foreach ($pares as $number) {
        echo "<li> $number </li>";
        }
           ?>
        </ul>

        <h1>A soma dos maiores</h1>
        <ul>
            <?php
            $ordenados = $numbers;
            rsort($ordenados);
            ?>
            <h2><?=$ordenados[0] + $ordenados[1];?></h2>
            </ul>
        </body>
</html>