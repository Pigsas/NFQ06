<?php

namespace Nfq\Academy;

class Reservation
{
    protected $startDate;
    protected $endDate;

    private $guest;

    public function __construct(\DateTime $startDate, \DateTime $endDate, Guest $guest)
    {
        $this->endDate = $endDate;
        $this->startDate = $startDate;
        $this->guest = $guest;
    }

    public function __toString(): string
    {
        return "Class to sore reservation info";
    }

    public function  getStartDate(): string
    {
        return $this->startDate->format('Y-m-d');
    }

    public function  getEndDate(): string
    {
        return $this->endDate->format('Y-m-d');
    }

    public function getGuest(): Guest
    {
        return $this->guest;
    }
}