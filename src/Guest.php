<?php

namespace Nfq\Academy;

class Guest
{
    private $firstName;
    private $lastName;

    public function __construct(String $firstName, String $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getGuestName(): string
    {
        return $this->firstName.' '.$this->lastName;
    }

    public function __toString(): string
    {
        return "Class to store information about guest";
    }
}