<?php

namespace App\Events;

use App\Models\GpsLocation;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class GpsCaptured
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public GpsLocation $gps
    ) {}
}