<?php
    class User {
        protected string $name;
        protected string $surname;
        protected string $email;
        protected int $telephone;
        protected array $address;
        protected array $debitCard;
        protected array $cart;
        private bool $registered = false;
        

        private function getDiscount() {
            if ($this->registered){
                return 20;
            }

            return 0;
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
         * Get the value of surname
         */ 
        public function getSurname()
        {
                return $this->surname;
        }

        /**
         * Set the value of surname
         *
         * @return  self
         */ 
        public function setSurname($surname)
        {
                $this->surname = $surname;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of telephone
         */ 
        public function getTelephone()
        {
                return $this->telephone;
        }

        /**
         * Set the value of telephone
         *
         * @return  self
         */ 
        public function setTelephone($telephone)
        {
                $this->telephone = $telephone;

                return $this;
        }

        /**
         * Get the value of address
         */ 
        public function getAddress()
        {
                return $this->address;
        }

        /**
         * Set the value of address
         *
         * @return  self
         */ 
        public function setAddress($address)
        {
                $this->address = $address;

                return $this;
        }

        /**
         * Get the value of debitCard
         */ 
        public function getDebitCard()
        {
                return $this->debitCard;
        }

        /**
         * Set the value of debitCard
         *
         * @return  self
         */ 
        public function setDebitCard($debitCard)
        {
                $this->debitCard = $debitCard;

                return $this;
        }

        /**
         * Get the value of registered
         */ 
        public function getRegistered()
        {
                return $this->registered;
        }

        /**
         * Set the value of registered
         *
         * @return  self
         */ 
        public function setRegistered($registered)
        {
                $this->registered = $registered;

                return $this;
        }

        /**
         * Get the value of cart
         */ 
        public function getCart()
        {
                return $this->cart;
        }

        /**
         * Set the value of cart
         *
         * @return  self
         */ 
        public function setCart($cart)
        {
                $this->cart = $cart;

                return $this;
        }
    }
?>