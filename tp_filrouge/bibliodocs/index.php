<?php
    require_once "recit.class.php";
    require_once "recit.controller.php";
?>


                        <?php
                        if (isset($_GET['id']))
                        afficherDetailRecit($_GET['id']);
    else
    afficherRecit();
?>