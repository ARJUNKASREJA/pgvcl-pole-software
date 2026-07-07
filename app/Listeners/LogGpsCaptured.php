<?php

namespace App\Listeners;

use App\Events\GpsCaptured;
use Illuminate\Support\Facades\Log;

class LogGpsCaptured
{
    public function handle(GpsCaptured $event): void
    {
        Log::info('GPS Captured',[
            'gps_id'=>$event->gps->id,
            'pole_id'=>$event->gps->pole_id,
            'lat'=>$event->gps->latitude,
            'lng'=>$event->gps->longitude,
        ]);
    }
}