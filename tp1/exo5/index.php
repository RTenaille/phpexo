<?php

    function afficherLesNombres($pNombre){
            for($i = 0; $i <= $pNombre; $i ++){
                $base = 2;
                $exposant = $i;
                $resultat = 2 * $i;
                echo("Exposant : ".$base."x".$exposant."=".$resultat);
            }
        }

        afficherLesNombres($_GET["nombre"]);
    ?>