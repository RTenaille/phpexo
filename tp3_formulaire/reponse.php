<?php

function definirNiveauPhp(){
    if(isset($_POST['check'])){
        $message = "<p>Vous avez confronté le PHP. Et vous vous sentez d'attaque pour la suite.</p>";
    }else{
        $message = "<p>Vous n'avez pas encore affronté le PHP. Il est temps pour vous de remporter ce combat.</p>";
 }
 return $message;
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malbiche : Connecté</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Bienvenue  <?=strip_tags($_POST['nameOptions'])?> <?=$_POST['nom']?> <?=strip_tags($_POST['prenom'])?>  et bonne malbiche !</h2>
    <p id="paragrapheConnecte">
        Il semblerait que vous soyez né le <?=strip_tags($_POST['birthday'])?>. Figurez-vous qu'il y ait de forte chance qu'aujourd'hui ne soit pas votre anniversaire !
    </p>
    <ul>
        <li>Votre identifiant : <?=strip_tags($_POST['identifiantUtilisateur'])?></li>
        <li>Votre mot de passe est : <?=strip_tags($_POST["mdp"])?> </li>
        <li>Votre niveau : <?=definirNiveauPhp()?> </li>
    </ul>


</body>
</html>
