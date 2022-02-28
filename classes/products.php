<?php
    class Product {
        private string $code;
        private string $name;
        private string $description;
        private float $price;
        private string $whichAnimal;

        function __construct($_name, $_description,$_price, $_whichAnimal)
        {
            $this->setName($_name);
            $this->setDescription($_description);
            $this->setPrice($_price);
            $this->setWhichAnimal($_whichAnimal);
        }

        /**
         * Get the value of code
         */ 
        public function getCode()
        {
                return $this->code;
        }

        /**
         * Set the value of code
         *
         * @return  self
         */ 
        private function setCode($code)
        {
                $this->code = $code;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of whichAnimal
         */ 
        public function getWhichAnimal()
        {
                return $this->whichAnimal;
        }

        /**
         * Set the value of whichAnimal
         *
         * @return  self
         */ 
        public function setWhichAnimal($whichAnimal)
        {
                $this->whichAnimal = $whichAnimal;

                return $this;
        }
    }
?>