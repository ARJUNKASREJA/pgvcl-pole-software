<?php

namespace App\Exports;

use App\Models\Consumer;
use Maatwebsite\Excel\Concerns\FromCollection;

class ConsumerExport implements FromCollection
{
    public function collection()
    {
        return Consumer::all();
    }
}