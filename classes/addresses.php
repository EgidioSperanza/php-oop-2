<?php 

class Address {
    private string $address;

    function __construct ($_street, $_zipCode, $_city){
        $this->getAddress($_street, $_zipCode, $_city);
    }

    private function getAddress($street, $zipCode, $city){
        return $this->address="$street $zipCode, $city";
    }
    /**
     * Set the value of address
     *
     * @return  self
     */ 
    private function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}
?>