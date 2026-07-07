<?php

namespace App\Services;

use App\Models\Pole;

class AutoPoleLayoutService
{
    public function arrange()
    {
        return Pole::orderBy(

            'pole_no'

        )->get();
    }
}