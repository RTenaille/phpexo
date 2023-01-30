<?php

    function afficherLesNombres($pNombre){
            for($i = 0; $i <= $pNombre; $i++){
                $message = "Voici le". $i . " et";
                echo($message);
            }
        }

        afficherLesNombres($_GET["nombre"]);
    ?>