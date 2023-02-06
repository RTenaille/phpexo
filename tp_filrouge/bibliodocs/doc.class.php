<?php
    class Doc{
        public int $identifiantDoc;
        public string $titreDoc;
        public string $lienDoc;

        public function __construct(int $pIdentifiantDoc, string $pTitreDoc, string $pLienDoc){
            $this->identifiantDoc=$pIdentifiantUtilisateur;
            $this->titreDoc=$pTitreDoc;
            $this->lienDoc=$pLienDoc;
        }
    }
?>