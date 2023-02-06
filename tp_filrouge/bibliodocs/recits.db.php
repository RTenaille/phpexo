<?php

    class RecitDB{
        static function lister(){

            try{
            $contenuTableRecit = Database::getInstance()->query("select * FROM RECITS;");
            $resultat = $contenuTableRecit->fetchall();
            $listeRecits = new ArrayObject();
             foreach($resultat as $key=>$value){
          //      var_dump($value);
                $recit = new Recit($value['identifiantrecit'],$value['titrerecit'],$value['descriptionrecit'],$value['illustrationrecit'],$value['texterecit']);
            //    var_dump($recit);
                $listeRecits->append($recit);
             }
             return new Reponse($listeRecits);
            } catch(PDOException $e){
                print_r("Quelqu'un a fait sauter la boutique ! Revenez plus tard ou essayez de passer par un autre chemin.".$e->getMessage());
                return new Reponse(false, $e);
            }
        }

        static function lire($pIdentifiant){
            if(!is_numeric($pIdentifiant)||$pIdentifiant<=0){
                return new Reponse(false, NULL);
            }
            try{
            $contenuTableRecit = Database::getInstance()->query('select * FROM RECITS where identifiantrecit='.$pIdentifiant.';');
            $value = $contenuTableRecit->fetch();
            if($value!=false){
            $recit = new Recit($value['identifiantrecit'],$value['titrerecit'],$value['descriptionrecit'],$value['illustrationrecit'],$value['texterecit']);
            return new Reponse($recit);
            } else {
                return new Reponse(false, NULL);
            }
            }
            catch(PDOException $e){
                print_r("Quelqu'un a fait sauter la boutique ! Revenez plus tard ou essayez de passer par un autre chemin.".$e->getMessage());
                return new Reponse(false, $e);
            }

        }

    }
?>