<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 5;
    $y = 10;
    switch ($x){
        case $x < $y:
            echo 'x est inférieur à y';
            break;
        case $x > $y:
            echo 'x est supérieur à y';
            break;
        case $x == $y:
            echo 'x est égal à y';
            break;
        default:
        echo " qué qu'c'est qu'ce foutouère !";
        break;
    }
    ?>
</body>
</html>