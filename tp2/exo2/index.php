<?php
    $tableauDeValeurs = [1, 2, 3, 4, 5, 6];

    var_dump($tableauDeValeurs);

    function calculerSomme($tableauDeValeurs){
        $somme =0;
        foreach($tableauDeValeurs as $key => $valeur){
            $somme +=$valeur;
            $resultat = $somme;
            echo('La somme est de = '.$somme);
            
        }
        return $resultat;
    }

    calculerSomme($tableauDeValeurs);


    function calculerMoyenne($tableauDeValeurs){
        $exposant = count($tableauDeValeurs);
        
        foreach($tableauDeValeurs as $key => $valeur){
            $somme = calculerSomme($resultat);
            $moyenne = $somme / $exposant;
            echo('La moyenne est de = '.$moyenne);


        }
    }
    /*calculerMoyenne($tableauDeValeurs);*/


?>
