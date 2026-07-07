<?php

namespace App\Observers;

use App\Models\DrawingHistory;

class DrawingHistoryObserver
{
    public function created(
        DrawingHistory $history
    ): void
    {
    }

    public function updated(
        DrawingHistory $history
    ): void
    {
    }

    public function deleted(
        DrawingHistory $history
    ): void
    {
    }
}