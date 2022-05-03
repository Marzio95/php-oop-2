<?php
include_once __DIR__ . '/product.php';

class Kennels extends Product
{
    private $length;
    private $height;
    private $material;
    private $typeOfWashing;

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }


    public function getTypeOfWashing()
    {
        return $this->typeOfWashing;
    }

    public function setTypeOfWashing($typeOfWashing)
    {
        $this->typeOfWashing = $typeOfWashing;

        return $this;
    }
}
