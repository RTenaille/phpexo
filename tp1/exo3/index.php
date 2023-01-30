<?php

    function afficherLesNombres($pNombre){
            for($i = $pNombre; $i >= 0; $i--){
                $message = "Voici le". $i . " et";
                echo($message);
            }
        }

        afficherLesNombres($_GET["nombre"]);
    ?>