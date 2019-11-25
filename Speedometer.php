<?php


class Speedometer
{
    public static function convertMilesToKm(int $Miles)
    {
        return round($Miles*1.61, 2);

    }

    public static function convertKmToMiles(int $Km)
    {
        return round($Km/1.61, 2);

    }

}