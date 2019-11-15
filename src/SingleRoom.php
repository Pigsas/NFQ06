<?php

namespace Nfq\Academy;

class SingleRoom extends Room
{
    private $bedCount = 1;
    private $roomType = 'Standard room';
    private $isRestroom = true;
    private $isBalcony = false;
    private $extras = [
        'TV',
        'air-conditioner'
    ];

    public function __toString(): string
    {
        return "Room class of singe room";
    }

}