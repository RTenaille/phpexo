<?php
    class Utilisateur{
        public int $identifiantUtilisateur;
        public string $pseudoUtilisateur;
        public string $emailUtilisateur;

        public function __construct(int $pIdentifiantUtilisateur, string $pPseudoUtilisateur, string $pEmailUtilisateur){
            $this->identifiantUtilisateur=$pIdentifiantUtilisateur;
            $this->pseudoUtilisateur= htmlentities($pPseudoUtilisateur);
            $this->emailUtilisateur= htmlentities($pEmailUtilisateur);
        }
    }
?>