<?php
    require_once "seasonal.php";

    class Seasonal extends Product {
        protected string $fromDate;
        protected string $toDate;

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
    }
?>