<?php
include_once __DIR__ . '/user.php';

class registeredUser extends User
{
    private $discount = 20;
    private $subscriptionStart;
    private $subscriptionEnd;

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    public function getSubscriptionStart()
    {
        return $this->subscriptionStart;
    }

    public function setSubscriptionStart($subscriptionStart)
    {
        $this->subscriptionStart = $subscriptionStart;

        return $this;
    }

    public function getSubscriptionEnd()
    {
        return $this->subscriptionEnd;
    }

    public function setSubscriptionEnd($subscriptionEnd)
    {
        $this->subscriptionEnd = $subscriptionEnd;

        return $this;
    }
}
