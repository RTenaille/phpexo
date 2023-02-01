<?php

class Recit {
    public int $identifiantRecit;
    public String $titreRecit;
    public String $descriptionRecit;
    public $illustrationRecit;
    public String $texteRecit;

    public function __construct($pIdentifiantRecit, $pTitreRecit, $pDescriptionRecit, $pIllustrationRecit, $pTexteRecit){
        $this->identifiantRecit = $pIdentifiantRecit;
        $this->titreRecit = htmlentities($pTitreRecit);
        $this->descriptionRecit = htmlentities($pDescriptionRecit);
        $this->illustrationRecit = $pIllustrationRecit;
        $this->texteRecit = htmlentities($pTexteRecit);

    }

    public function __toString(){
        return json_encode($this);
    }
}


?>