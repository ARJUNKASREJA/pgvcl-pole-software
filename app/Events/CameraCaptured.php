<?php

namespace App\Events;

use App\Models\CameraPhoto;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CameraCaptured
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public CameraPhoto $photo
    ){
    }
}