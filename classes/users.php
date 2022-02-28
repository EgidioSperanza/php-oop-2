<?php
    require_once __DIR__ . "/addresses.php";
    require_once __DIR__ . "/debitCards.php";

    class User {
        private string $name;
        private string $surname;
        private string $email;
        private int $telephone;
        private Address $address;
        private DebitCard $debitCard;
        private array $cart;
        private bool $registered = true;
        
        function __construct($_name,$_surname,$_email,$_telephone,$_street, $_zipCode, $_city,$_number, $_owner, $_expireDate)
        {
            $this->setName($_name);
            $this->setSurname($_surname);
            $this->setEmail($_email);
            $this->setTelephone($_telephone);
            $this->setAddress(new Address($_street, $_zipCode, $_city));
            $this->setDebitCard(new DebitCard($_number, $_owner, $_expireDate));
        }
        /**
         * Get the value of name
         */ 
        private function getName()
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
        private function getSurname()
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
        private function getEmail()
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
        private function getTelephone()
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
    }
?>