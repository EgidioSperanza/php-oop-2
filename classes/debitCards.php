<?php

    class DebitCard {
        private int $number;
        private string $owner;
        private string $expireDate;
        private bool $valid;


        function __construct($_number, $_owner, $_expireDate)
        {
            $this->setNumber($_number);
            $this->setOwner($_owner);
            $this->setExpireDate($_expireDate);
            $this->setValid();
        }
        /**
         * Get the value of number
         */ 
        public function getNumber()
        {
                return $this->number;
        }

        /**
         * Set the value of number
         *
         * @return  self
         */ 
        public function setNumber($number)
        {
                $this->number = $number;

                return $this;
        }

        /**
         * Get the value of owner
         */ 
        public function getOwner()
        {
                return $this->owner;
        }

        /**
         * Set the value of owner
         *
         * @return  self
         */ 
        public function setOwner($owner)
        {
                $this->owner = $owner;

                return $this;
        }

        /**
         * Get the value of expireDate
         */ 
        public function getExpireDate()
        {
                return $this->expireDate;
        }

        /**
         * Set the value of expireDate
         *
         * @return  self
         */ 
        public function setExpireDate($expireDate)
        {
                $this->expireDate = $expireDate;

                return $this;
        }

        /**
         * Get the value of valid
         */ 
        public function getValid()
        {
                return $this->valid;
        }

        /**
         * Set the value of valid
         *
         * @return  self
         */ 
        public function setValid()
        {
            if($this->expireDate > date("Y/m/d")){
                return $this->valid=true;
            }else{
                return $this->valid=false;
            }
        }
    }
?>