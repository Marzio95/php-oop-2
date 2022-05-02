<?php

class User
{
    private $name;
    private $surname;
    private $email;
    private $dateOfBirth;
    private $creditCard;
    private $deadlineCreditCard;

    public function __construct($_name, $_surname, $_email, $_dateOfBirth, $_creditCard, $_deadlineCreditCard)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->dateOfBirth = $_dateOfBirth;
        $this->creditCard = $_creditCard;
        $this->deadlineCreditCard = $_deadlineCreditCard;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getCreditCard()
    {
        return $this->creditCard;
    }

    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;

        return $this;
    }

    public function getDeadlineCreditCard()
    {
        return $this->deadlineCreditCard;
    }

    public function setDeadlineCreditCard($deadlineCreditCard)
    {
        if ($deadlineCreditCard > date("j F Y"))
            $this->deadlineCreditCard = $deadlineCreditCard;

        return $this;
    }
}