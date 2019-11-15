<?php


namespace Nfq\Academy;


class Bedroom extends Room
{
    private $bedCount = 2;
    private $roomType = 'Gold room';
    private $isRestroom = true;
    private $isBalcony = true;
    private $extras = [
        'TV',
        'air-conditioner',
        'refrigerator',
        'mini-bar',
        'bathtub'
    ];

    public function __toString(): string
    {
        return "Room class of bedroom";
    }
}