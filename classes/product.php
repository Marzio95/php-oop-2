<?php

class Product
{
    private $price;
    private $FinalPrice;
    private $animal;

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

    public function setFinalPrice($registerdUser, $discount)
    {
        return $this->FinalPrice = $this->price - ($this->price / 100 * $registerdUser->$discount);
    }

    public function getFinalPrice()
    {
        return $this->FinalPrice;
    }
}
