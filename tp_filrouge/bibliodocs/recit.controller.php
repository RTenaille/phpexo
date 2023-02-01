<?php
    function afficherRecit(){
        ob_start();
        $json = file_get_contents("recits.json");
        $recitsJson = json_decode($json);
        $i =0;
        foreach($recitsJson->recits as $recitJson){
            $recit = new Recit($i, $recitJson->titreRecit,$recitJson->descriptionRecit,$recitJson->illustrationRecit,$recitJson->texteRecit);

            include 'views/cardRecit.php';
            $i ++;
        }
        $contenu = ob_get_clean();
        include "views/layout.php";
    }

    function afficherDetailRecit($pIdentifiantRecit){
        ob_start();
        $json = file_get_contents("recits.json");
        $recitsJson = json_decode($json);
        $recit = new Recit($pIdentifiantRecit, $recitsJson->recits[$pIdentifiantRecit]->titreRecit,$recitsJson->recits[$pIdentifiantRecit]->descriptionRecit, $recitsJson->recits[$pIdentifiantRecit]->illustrationRecit,$recitsJson->recits[$pIdentifiantRecit]->texteRecit);
        include "views/detailRecit.php";
        $contenu = ob_get_clean();
        include "views/layout.php";
}

?>
