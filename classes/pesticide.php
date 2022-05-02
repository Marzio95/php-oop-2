<?php
include_once __DIR__ . '/accessories.php';

class Pesticide extends Accessories
{
    private $duration;

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }
}
