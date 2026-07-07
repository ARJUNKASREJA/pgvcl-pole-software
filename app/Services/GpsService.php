<?php

namespace App\Services;

class GpsService
{
    public static function validate(
        $latitude,
        $longitude
    ): bool
    {
        return is_numeric($latitude)
            && is_numeric($longitude)
            && $latitude >= -90
            && $latitude <= 90
            && $longitude >= -180
            && $longitude <= 180;
    }

    public static function googleMapUrl(
        $latitude,
        $longitude
    ): string
    {
        return "https://maps.google.com/?q={$latitude},{$longitude}";
    }

    public static function format(
        $latitude,
        $longitude
    ): array
    {
        return [

            'latitude' => round($latitude,6),

            'longitude' => round($longitude,6),

        ];
    }
}