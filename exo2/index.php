<?php
$dureeEnSeconde = 6700;
$nombreHeures = floor($dureeEnSeconde/3600);
$dureeEnSeconde -= $nombreHeures*3600;

$nombreMinutes = floor($dureeEnSeconde/60);
$dureeEnSeconde -= $nombreMinutes*60;
$message =$nombreHeures."H".$nombreMinutes."M".$dureeEnSeconde."S";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?=$nombreHeures?>HH
<?=$nombreMinutes?>MM
    <?=$dureeEnSeconde?>SS
<script>alert("<?=$message?>");</script>
</body>
</html>