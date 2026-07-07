<?php

namespace App\Traits;

use App\Services\GpsService;

trait HasGps
{
    public function hasGps(): bool
    {
        return !empty($this->latitude)
            && !empty($this->longitude);
    }

    public function gps(): array
    {
        if (!$this->hasGps()) {
            return [
                'latitude' => null,
                'longitude' => null,
            ];
        }

        return GpsService::format(
            $this->latitude,
            $this->longitude
        );
    }

    public function googleMapUrl(): ?string
    {
        if (!$this->hasGps()) {
            return null;
        }

        return GpsService::googleMapUrl(
            $this->latitude,
            $this->longitude
        );
    }

    public function coordinates(): string
    {
        if (!$this->hasGps()) {
            return '-';
        }

        return $this->latitude . ', ' . $this->longitude;
    }

    public function isValidGps(): bool
    {
        if (!$this->hasGps()) {
            return false;
        }

        return GpsService::validate(
            $this->latitude,
            $this->longitude
        );
    }
}