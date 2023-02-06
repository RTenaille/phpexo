<?php
    class Utilisateur{
        public int $identifiantUtilisateur;
        public string $nomUtilisateur;
        public string $prenomUtilisateur;

        public function __construct(int $pIdentifiantUtilisateur, string $pNomUtilisateur, string $pPrenomUtilisateur){
            $this->identifiantUtilisateur=$pIdentifiantUtilisateur;
            $this->nomUtilisateur=$pNomUtilisateur;
            $this->prenomUtilisaeur=$pPrenomUtilisateur;
        }
    }
?>