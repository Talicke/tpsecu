<?php
    class Evenement{
        /*---------------------------------------------
                        Attributs
        -----------------------------------------------*/
        private ?int $id_event;
        private ?string $nom_event;
        private ?string $desc_event;
        private ?string $date_event;
        private ?int $id_type;
        /*---------------------------------------------
                        Constructeur
        -----------------------------------------------*/
        public function __construct(?string $nom, ?string $desc, ?string $date, ?int $type){
            $this->nom_event = $nom;
            $this->desc_event = $desc;
            $this->date_event = $date;
            $this->id_type = $type;
        }
        /*---------------------------------------------
                        Getter et Setter
        -----------------------------------------------*/
        public function getIdEvent():?int{
            return $this->id_event;
        }
        public function getNomEvent():?string{
            return $this->nom_event;
        }
        public function getDescEvent():?string{
            return $this->desc_event;
        }
        public function getDateEvent():?string{
            return $this->date_event;
        }
        public function getIdType():?int{
            return $this->id_type;
        }

        public function setIdEvent(?int $id):void{
            $this->id_event = $id;
        }
        public function setNomEvent(?string $nom):void{
            $this->nom_event = $nom;
        }
        public function setDescEvent(?string $desc):void{
            $this->desc_event = $desc;
        }
        public function setDateEvent(?string $date):void{
            $this->date_event = $date;
        }
        public function setIdType(?int $type):void{
            $this->id_type = $type;
        }
    }
?>