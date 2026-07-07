<?php

namespace App\Observers;

use App\Models\CameraPhoto;

class CameraObserver
{
    public function created(CameraPhoto $photo): void
    {
    }

    public function updated(CameraPhoto $photo): void
    {
    }

    public function deleted(CameraPhoto $photo): void
    {
    }
}