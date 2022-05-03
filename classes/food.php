<?php
include_once __DIR__ . '/product.php';

class Food extends Product
{
    private  $typeOfFood;
    private  $foodExpiration;


    public function getTypeOfFood()
    {
        return $this->typeOfFood;
    }

    public function setTypeOfFood($typeOfFood)
    {
        $this->typeOfFood = $typeOfFood;

        return $this;
    }

    public function getFoodExpiration()
    {
        return $this->foodExpiration;
    }

    public function setFoodExpiration($foodExpiration)
    {
        $this->foodExpiration = $foodExpiration;

        return $this;
    }
}
