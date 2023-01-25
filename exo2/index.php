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
    $duree = 6700;
    $minute = $duree % 60;
    $heure = ($duree - $minute) / 60;
    echo 'La durée de 6700 secondes représente'.($heure).'heure et '.($minute).'minutes';

    ?>
</body>
</html>