<?php 
require_once __DIR__ . "/users.php";

class Cart {
    private array $shoppedItems;
    protected float $amount=0;

    function __construct($_shopped, $_user) {
        $this->setShoppedItems($_shopped);


        $this->getAmount($_shopped, $_user);
    }
    /**
     * Get the value of shoppedItems
     */ 
    public function getShoppedItems()
    {
        return $this->shoppedItems;
    }

    /**
     * Set the value of shoppedItems
     *
     * @return  self
     */ 
    public function setShoppedItems($shoppedItems)
    {
        $this->shoppedItems = $shoppedItems;

        return $this;
    }

    /**
     * Get the value of amount
     */ 
    public function getAmount($_shopped, $_user)
    {
        foreach($_shopped as $item) {
            $this->amount += $item->getPrice();
        };

        if ($_user->getRegistered()) {
            $this->amount = $this->amount * 0.8;
        }
        return $this->amount=round($this->amount, 2);
    }
}
?>