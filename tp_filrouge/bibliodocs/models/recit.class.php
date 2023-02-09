<?php

class Recit {
    public int $identifiantRecit;
    public String $titreRecit;
    public String $descriptionRecit;
    public $illustrationRecit;
    public String $texteRecit;
    public Utilisateur $redacteur;

    public function __construct($pIdentifiantRecit, $pTitreRecit, $pDescriptionRecit, $pIllustrationRecit, $pTexteRecit, Utilisateur $pRedacteur){
        $this->identifiantRecit = $pIdentifiantRecit;
        $this->titreRecit = htmlentities($pTitreRecit);
        $this->descriptionRecit = htmlentities($pDescriptionRecit);
        $this->illustrationRecit = $pIllustrationRecit;
        $this->texteRecit = htmlentities($pTexteRecit);
        $this->redacteur = $pRedacteur;

    }

    public function __toString(){
        return json_encode($this);
    }
}


?>