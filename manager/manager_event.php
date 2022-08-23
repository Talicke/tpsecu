<?php
    class ManagerEvent extends Evenement{
        /*---------------------------------------------
                        Méthodes
        ----------------------------------------------*/
        public function createEvent(object $bdd):void{
            try{
                $nom = $this->getNomEvent();
                $desc = $this->getPrixEvent();
                $req = $bdd->prepare('INSERT INTO evenement(nom_event, desc_event, date_event) 
                VALUES(?, ?, ?)');
                $req->bindparam(1,$nom, PDO::PARAM_STR);
                $req->bindparam(2,$prix, PDO::PARAM_STR);
                $req->bindparam(3,$date, PDO::PARAM_STR);
                $req->execute();
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
        public function showAllArticle(object $bdd):?array{
            try{
                $req = $bdd->prepare('SELECT id_event, nom_event, 
                desc_event, date_event FROM evenement');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>