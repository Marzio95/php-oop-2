<?php

class Product
{
    private $price;
    private $finalPrice;
    private $animal;

    public function __construct($_price, $_animal)
    {
        $this->price = $_price;
        $this->animal = $_animal;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getAnimal()
    {
        return $this->animal;
    }

    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    public function setfinalPrice($registerdUser, $discount)
    {
        return $this->finalPrice = $this->price - ($this->price / 100 * $registerdUser->$discount);
    }

    public function getfinalPrice()
    {
        return $this->finalPrice;
    }
}
