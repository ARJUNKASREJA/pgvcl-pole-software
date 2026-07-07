<?php

namespace App\Exports;

use App\Models\Pole;
use Maatwebsite\Excel\Concerns\FromCollection;

class PoleExport implements FromCollection
{
    public function collection()
    {
        return Pole::all();
    }
}