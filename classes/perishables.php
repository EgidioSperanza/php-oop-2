<?php
    require_once "products.php";

    class Perishable extends Product {
        protected string $expiration;

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
                $this->expiration = $expiration;

                return $this;
        }
    }
?>