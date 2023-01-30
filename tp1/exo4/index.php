<?php

    function afficherLesNombres($pNombre){
            for($i = 2; $i <= $pNombre; $i += 2){
                $message = "Voici le". $i . " et";
                echo($message);
            }
        }

        afficherLesNombres($_GET["nombre"]);
    ?>