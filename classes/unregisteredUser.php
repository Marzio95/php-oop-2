<?php
include_once __DIR__ . '/user.php';

class UnregisteredUser extends User
{
    private  $discount = 0;
    private  $registered = false;

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    public function getRegistered()
    {
        return $this->registered;
    }

    public function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }
}
