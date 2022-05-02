<?php
include_once __DIR__ . '../index.php';

class unregisteredUser extends User
{
    private $discount = 0;

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
}
