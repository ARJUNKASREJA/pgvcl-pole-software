<?php

namespace App\Services;

class LocationService
{
    public static function fullAddress(array $data): string
    {
        return implode(', ',array_filter([

            $data['village'] ?? null,

            $data['subdivision'] ?? null,

            $data['division'] ?? null,

        ]));
    }

    public static function coordinates(
        $lat,
        $lng
    ): string
    {
        return $lat.', '.$lng;
    }
}