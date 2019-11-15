<?php

namespace Nfq\Academy;

interface ReservableInterface
{
    public function addReservation(Reservation $reservation);

    public function removeReservation(Reservation $reservation);
}