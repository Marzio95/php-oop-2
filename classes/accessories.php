<?php
include_once __DIR__ . '/product.php';

class Accessories extends Product
{
    private  $material;

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }
}
