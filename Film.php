<?php 

    class Film {

        public $titolo;
        public $genere;
        public $durata;
        private $prezzo;
        static $contatore = 0;

        public function __construct($_titolo,$_genere,$_durata){

            $this->titolo = $_titolo;
            $this->genere = $_genere;
            $this->durata = $_durata;
            self::$contatore++;

        }

        static function getContatore(){
            
            return self::$contatore;

        }

        public function setPrezzo($_prezzo){

            $this->prezzo = $_prezzo;

        }

        public function getPrezzo(){

            return $this->prezzo;

        }

    }



?>