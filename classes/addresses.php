<?php 

class Address {
    function __construct ($_street, $_zipCode, $_city){
        $this->getAddress($_street, $_zipCode, $_city);
    }

    private function getAddress($street, $zipCode, $city){
        return $this->address="$street $zipCode, $city";
    }
}
?>