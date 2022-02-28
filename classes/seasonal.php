<?php
    require_once __DIR__ . "/seasonal.php";

    class Seasonal extends Product {
        protected string $fromDate;
        protected string $toDate;
        private string $availability;

        function __construct($_name, $_description,$_price, $_whichAnimal,$_fromDate, $_toDate)
        {
            parent::__construct($_name, $_description,$_price, $_whichAnimal);
            $this->setFromDate($_fromDate);
            $this->setToDate($_toDate);
            $this->setAvailability();
        }

        /**
         * Get the value of fromDate
         */ 
        public function getFromDate()
        {
                return $this->fromDate;
        }

        /**
         * Set the value of fromDate
         *
         * @return  self
         */ 
        public function setFromDate($fromDate)
        {
                $this->fromDate = $fromDate;

                return $this;
        }

        /**
         * Get the value of toDate
         */ 
        public function getToDate()
        {
                return $this->toDate;
        }

        /**
         * Set the value of toDate
         *
         * @return  self
         */ 
        public function setToDate($toDate)
        {
                $this->toDate = $toDate;

                return $this;
        }

        /**
         * Get the value of availability
         */ 
        public function getAvailability()
        {
                return $this->availability;
        }

        /**
         * Set the value of availability
         *
         * @return  self
         */ 
        public function setAvailability()
        {
            if(date("Y/m/d")>$this->fromDate && date("Y/m/d")<$this->toDate){
                return $this->availability="Prodotto Disponibile per l'acquisto";
            }else{
                return $this->availability="Il Prodotto Tornerà disponibile il ".$this->fromDate;
            }
        }
    }
?>