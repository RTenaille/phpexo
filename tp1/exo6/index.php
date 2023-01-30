<?php

    function afficherLesNombres($pNombre){
            $i = 0;
            while($i <= $pNombre){
                $base = 2;
                $exposant = $i;
                $resultat = 2 * $i;
                echo("Exposant : ".$base."x".$exposant."=".$resultat);
                $i ++;
            }
        }

        afficherLesNombres($_GET["nombre"]);
    ?>