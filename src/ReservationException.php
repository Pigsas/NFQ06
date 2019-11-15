<?php


namespace NFQ\Academy;


class ReservationException extends \Exception
{

    public function __construct($message, $code = 0, \Exception $previous = null) {

        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string {
        return 'Exception for reservation action';
    }
}