<?php
    function afficherLesUtilisateurs(){
        ob_start();
        $reponse = UtilisateurDB::lister();
        if($reponse->isSuccessfull()){
            $listeUtilisateurs = $reponse->getData();
            if($listeUtilisateurs){
                foreach($listeUtilisateurs as $utilisateur){
                    include 'views/card.utilisateur.php';
                }
                } else {
                    include "views/utilisateur.nontrouve.php";
                }
            } else {
                include "views/detail.exception.php";
            }
            $contenu = ob_get_clean();
            include "views/layout.php";
    }

    function afficherUnUtilisateur($pIdentifiantUtilisateur){
        ob_start();
        $reponse = UtilisateurDB::lire($pIdentifiantUtilisateur);
        if ($reponse->isSuccessfull()){
            if($reponse->isDataFound()){
                $utilisateur = $reponse->getData()[0];
                include "views/afficher.unutilisateur.php";
            } else {
                include "views/utilisateur.nontrouve.php";
            }
        } else {
            include "views/detail.exception.php";
        }
    $contenu = ob_get_clean();
    include "views/layout.php";
    }
    
    
?>