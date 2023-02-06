<?php
    class UtilisateurDB{
        static function lister(){
            try{
                $contenuDeTable = Database::getInstance()->query("select * from UTILISATEURS");
                $resultat = $contenuDeTable->fetchall();
                $listeUtilisateurs = new ArrayObject();
                foreach($resultat as $key=>$value){
                    $utilisateur = new Utilisateur($value['identifiantutilisateur'],$value['nomutilisateur'],$value['prenomutilisateur']);
                    $listeUtilisateurs->append($utilisateur);
                }
                return new Reponse($listeUtilisateurs);
            } catch(PDOException $e) {
                return new Reponse(false, $e);
            }
        }

        static function lire($pIdentifiantUtilisateur){
            if(!is_numeric($pIdentifiantUtilisateur)||$pIdentifiantUtilisateur<=0){
                return new Reponse(false, NULL);
            } try {
                $contenuDeTable = Database::getInstance()->query("select * from UTILISATEURS where id=".$pIdentifiantUtilisateur.";");
                $value = $contenuDeTable->fetch();
                if($value!=false){
                    $utilisateur = new Utilisateur($value['identifiantutilisateur'],$value['nomutilisateur'],$value['prenomutilisateur']);
                    return new Reponse($utilisateur);
                } else {
                    return new Reponse(false, NULL);
                }
            } catch(PDOException $e) {
                print_r("La boutique est entrain de prendre feu désolé, nous ne saurons pas vous mener jusqu'à untel.".$e->getMessage());
                return new Reponse(false, $e);
            }
        }
    }
?>