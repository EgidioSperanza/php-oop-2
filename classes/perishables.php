<?php
    require_once __DIR__ . "/products.php";

    class Perishable extends Product {
        private string $expiration;

        function __construct($_name, $_description,$_price, $_whichAnimal,$_expiration)
        {
            parent::__construct($_name, $_description,$_price, $_whichAnimal);
            $this->setExpiration($_expiration);
        }
        /**
         * Get the value of expiration
         */ 
        public function getExpiration()
        {
                return $this->expiration;
        }

        /**
         * Set the value of expiration
         *
         * @return  self
         */ 
        public function setExpiration($expiration)
        {
            if($expiration > date("Y/m/d")){
                $this->expiration = $expiration;

                return $this;
            }else{
                return $this->expiration="PRODOTTO SCADUTO IN ATTESA DI RITIRO E/O DISTRUZIONE";
            }

        }
    }
?>