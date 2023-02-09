<?php
    require_once "config/config.php";
    require_once "repository/database.php";
    require_once "repository/reponse.php";

    require_once "repository/recits.db.php";
    require_once "models/recit.class.php";
    require_once "controller/recit.controller.php";

    require_once "repository/utilisateur.db.php";
    require_once "models/utilisateur.class.php";
    require_once "controller/utilisateur.controller.php";
?>


<?php
  if (isset($_GET['page']))
    $page = $_GET['page'];
    else
    $page = 'recit';
  switch($page)
  {
    case 'recit':
      if (isset($_GET['id']))
            afficherUnRecit($_GET['id']);
        else
            afficherLesRecits();
            break;
    case 'utilisateur':
      if (isset($_GET['id']))
            afficherUnUtilisateur($_GET['id']);
        else
            afficherLesUtilisateurs();
        break;
    default: afficherLesRecits();break;
  }
  
  ?>