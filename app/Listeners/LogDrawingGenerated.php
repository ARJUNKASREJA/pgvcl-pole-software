<?php

namespace App\Listeners;

use App\Events\DrawingGenerated;
use Illuminate\Support\Facades\Log;

class LogDrawingGenerated
{
    public function handle(
        DrawingGenerated $event
    ): void
    {
        Log::info('Drawing Generated',[
            'drawing_id'=>$event->drawing->id,
            'pole_id'=>$event->drawing->pole_id,
            'drawing_no'=>$event->drawing->drawing_no,
        ]);
    }
}