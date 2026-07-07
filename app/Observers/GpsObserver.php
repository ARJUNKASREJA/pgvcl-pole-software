<?php

namespace App\Observers;

use App\Models\GpsLocation;

class GpsObserver
{
    public function created(GpsLocation $gps): void
    {
        //
    }

    public function updated(GpsLocation $gps): void
    {
        //
    }

    public function deleted(GpsLocation $gps): void
    {
        //
    }
}