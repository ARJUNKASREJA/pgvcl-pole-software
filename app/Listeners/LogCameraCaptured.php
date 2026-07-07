<?php

namespace App\Listeners;

use App\Events\CameraCaptured;
use Illuminate\Support\Facades\Log;

class LogCameraCaptured
{
    public function handle(
        CameraCaptured $event
    ): void
    {
        Log::info('Camera Photo Uploaded',[
            'photo_id'=>$event->photo->id,
            'pole_id'=>$event->photo->pole_id,
        ]);
    }
}