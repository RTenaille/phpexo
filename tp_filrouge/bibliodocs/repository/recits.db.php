<?php

    class RecitDB{
        static function lister():Reponse{

            try{
            $contenuTableRecit = Database::getInstance()->query("select *, UTILISATEURS.identifiantutilisateur, RECITS.num_utilisateur FROM RECITS, UTILISATEURS WHERE RECITS.num_utilisateur = UTILISATEURS.identifiantutilisateur");
            $resultat = $contenuTableRecit->fetchall();
            $listeRecits = new ArrayObject();
             foreach($resultat as $key=>$value){
                
                $utilisateur = new Utilisateur($value["identifiantutilisateur"],$value["pseudoutilisateur"],$value["emailutilisateur"]);
                $recit = new Recit($value['identifiantrecit'],$value['titrerecit'],$value['descriptionrecit'],$value['illustrationRecit'],$value['texterecit'],$utilisateur);
            
                $listeRecits->append($recit);
             }
             return new Reponse($listeRecits);
            } catch(PDOException $e){
                print_r("Quelqu'un a fait sauter la boutique ! Revenez plus tard ou essayez de passer par un autre chemin.".$e->getMessage());
                return new Reponse(new ArrayObject(), $e);
            }
        }

        static function lire($pIdentifiant):Reponse{
            if(!is_numeric($pIdentifiant)||$pIdentifiant<=0){
                return new Reponse(new ArrayObject());
            }
            try{
            $contenuTableRecit = Database::getInstance()->query('select * FROM RECITS, UTILISATEURS where UTILISATEURS.identifiantutilisateur = RECITS.num_utilisateur AND identifiantrecit='.$pIdentifiant.';');
            $value = $contenuTableRecit->fetch();
            $resultat = new ArrayObject();
            if($value!=false){
                $utilisateur = new Utilisateur($value["identifiantutilisateur"],$value["pseudoutilisateur"],$value["emailutilisateur"]);
                $recit = new Recit($value['identifiantrecit'],$value['titrerecit'],$value['descriptionrecit'],$value['illustrationRecit'],$value['texterecit'],$utilisateur);
                $resultat->append($recit);
            return new Reponse($resultat);
            } else {
                return new Reponse(new ArrayObject());
            }
            }
            catch(PDOException $e){
                print_r("Quelqu'un a fait sauter la boutique ! Revenez plus tard ou essayez de passer par un autre chemin.".$e->getMessage());
                return new Reponse(new ArrayObject(), $e);
            }

        }

    }
?>