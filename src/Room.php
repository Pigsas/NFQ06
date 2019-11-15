<?php

namespace Nfq\Academy;

class Room implements ReservableInterface
{
    private $price;
    private $roomNumber;

    static private $reservations;

    public function __construct(Int $roomNumber, Float $price)
    {
        $this->roomNumber = $roomNumber;
        $this->price = $price;
    }

    public function addReservation(Reservation $reservation): bool
    {
        if(empty(self::$reservations[$this->roomNumber])) {
            self::$reservations[$this->roomNumber] = [$reservation];
            return true;
        } else {
            foreach (self::$reservations[$this->roomNumber] as $reservationItem) {
                if(($reservation->getStartDate() < $reservationItem->getStartDate()
                    && $reservation->getEndDate() > $reservationItem->getStartDate())
                    || ($reservation->getStartDate() > $reservationItem->getEndDate()
                    && $reservation->getEndDate() > $reservationItem->getEndDate())
                ) {
                    self::$reservations[$this->roomNumber][] = $reservation;
                    return true;
                } else {
                    throw new ReservationException('Reservation already exists', 5);
                }
            }
        }
    }

    public function removeReservation(Reservation $reservation): bool
    {
        if (self::$reservations[$this->roomNumber] === $reservation) {
            unset(self::$reservations[$this->roomNumber]);
            return true;
        } else {
            return false;
        }
    }

    public function getRoom(): int
    {
        return $this->roomNumber;
    }

    public function __toString(): string
    {
        return "Parent room class for other room classes";
    }
}