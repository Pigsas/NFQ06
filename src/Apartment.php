<?php

namespace Nfq\Academy;

class Apartment extends Room
{
    private $bedCount = 4;
    private $roomType = 'Diamond room';
    private $isRestroom = true;
    private $isBalcony = true;
    private $extras = [
        'TV',
        'air-conditioner',
        'refrigerator',
        'mini-bar',
        'bathtub',
        'kitchen box',
        'free Wi-fi'
    ];

    public function __toString(): string
    {
        return "Room class of apartment";
    }
}