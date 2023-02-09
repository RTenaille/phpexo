<?php
    class UtilisateurDB{
        static public function lister():Reponse{
            try{
                $contenuDeTable = Database::getInstance()->query("select * from UTILISATEURS");
                $resultat = $contenuDeTable->fetchall();
                $listeUtilisateurs = new ArrayObject();
                foreach($resultat as $key=>$value){
                    $utilisateur = new Utilisateur($value['identifiantutilisateur'],$value['pseudoutilisateur'],$value['emailutilisateur']);
                    $listeUtilisateurs->append($utilisateur);
                }
                return new Reponse($listeUtilisateurs);
            } catch(PDOException $e) {
                return new Reponse(new ArrayObject(), $e);
            }
        }

        static function lire($pIdentifiantUtilisateur):Reponse{
            if(!is_numeric($pIdentifiantUtilisateur)||$pIdentifiantUtilisateur<=0){
                return new Reponse(new ArrayObject());
            } try {
                $contenuDeTable = Database::getInstance()->query("select * from UTILISATEURS where identifiantutilisateur=".$pIdentifiantUtilisateur.";");
                $value = $contenuDeTable->fetch();
                if($value!=false){
                    $utilisateur = new Utilisateur($value['identifiantutilisateur'],$value['pseudoutilisateur'],$value['emailutilisateur']);
                    $resultat = new ArrayObject();
                    $resultat->append($utilisateur);
                    return new Reponse($resultat);
                } else {
                    return new Reponse(new ArrayObject());
                }
            } catch(PDOException $e) {
                print_r("La boutique est entrain de prendre feu désolé, nous ne saurons pas vous mener jusqu'à untel.".$e->getMessage());
                return new Reponse(new ArrayObject(), $e);
            }
        }
    }
?>