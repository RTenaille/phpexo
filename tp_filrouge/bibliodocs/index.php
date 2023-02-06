<?php
    require_once "config.php";
    require_once "database.php";
    require_once "reponse.php";
    require_once "recits.db.php";
    require_once "recit.class.php";
    require_once "recit.controller.php";
?>


                        <?php
                        if (isset($_GET['id']))
                        afficherDetailRecit($_GET['id']);
    else
    afficherRecit();
?>