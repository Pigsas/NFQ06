<?php

namespace Nfq\Academy;

class BookingManager
{
    public static function bookRoom (Room $room,Reservation $reservation): bool
    {
        if($room->addReservation($reservation)) {
            echo 'Room <strong>'
                .$room->getRoom().'</strong> successfully booked for <strong>'
                .$reservation->getGuest()->getGuestName().'</strong> from <time>'
                .$reservation->getStartDate().'</time> to <time>'
                .$reservation->getEndDate().'</time>!';
            return true;
        }
        return false;
    }
}