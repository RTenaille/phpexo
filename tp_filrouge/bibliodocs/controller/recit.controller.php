<?php
    function afficherLesRecits(){
        ob_start();
        // $json = file_get_contents("recits.json");
        // $recitsJson = json_decode($json);
        // $i =0;
        // foreach($recitsJson->recits as $recitJson){
        //    $recit = new Recit($i, $recitJson->titreRecit,$recitJson->descriptionRecit,$recitJson->illustrationRecit, $recitJson->texteRecit);

        //    include 'views/card.recit.php';
        //    $i ++;
        //  }
        $reponse = RecitDB::lister();
        if($reponse->isSuccessfull()){
            $listeRecits = $reponse->getData();
            if($listeRecits){
                foreach($listeRecits as $recit){
                    include 'views/card.recit.php';
                }
                } else {
                    include 'views/recit.nontrouve.php';
                }
                } else {
                    include "views/detail.exception.php";
                }
            $contenu = ob_get_clean();
            include 'views/layout.php';
        
    }

    function afficherUnRecit($pIdentifiantRecit){
        // ob_start();
        // $json = file_get_contents("recits.json");
        // $recitsJson = json_decode($json);
        // $recit = new Recit($pIdentifiantRecit, $recitsJson->recits[$pIdentifiantRecit]->titreRecit,$recitsJson->recits[$pIdentifiantRecit]->descriptionRecit, $recitsJson->recits[$pIdentifiantRecit]->illustrationRecit,$recitsJson->recits[$pIdentifiantRecit]->texteRecit);
        // include "views/detail.recit.php";
        // $contenu = ob_get_clean();
        ob_start();
        $reponse = RecitDB::lire($pIdentifiantRecit);
        if($reponse->isSuccessfull()){
            if($reponse->isDataFound()){
                $recit = $reponse->getData()[0];
                include "views/detail.recit.php";
            }else{
                include "views/recitIntrouvable.php";
            }}else{
                include "views/detail.exception.php";
            }
        
        
        $contenu = ob_get_clean();
        include "views/layout.php";
        }

?>
