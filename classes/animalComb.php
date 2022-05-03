<?php
include_once __DIR__ . '/accessories.php';

class AnimalComb extends Accessories
{
    private  $material;
    private  $softness;

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    public function getSoftness()
    {
        return $this->softness;
    }

    public function setSoftness($softness)
    {
        $this->softness = $softness;

        return $this;
    }
}
