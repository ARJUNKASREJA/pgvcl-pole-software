<?php

namespace App\Events;

use App\Models\Drawing;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DrawingGenerated
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Drawing $drawing
    ){}
}