<?php
    class ManagerType extends Type{
        /*---------------------------------------------
                        Méthodes
        ----------------------------------------------*/
        public function showAllType(object $bdd):?array{
            try{
                $req = $bdd->prepare('SELECT id_type, name_type FROM tpsecu.type');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
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