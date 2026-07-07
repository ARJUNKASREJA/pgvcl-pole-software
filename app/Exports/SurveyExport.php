<?php

namespace App\Exports;

use App\Models\SurveySheet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SurveyExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return SurveySheet::all();
    }

    public function headings(): array
    {
        return [

            'ID',

            'Survey No',

            'Project',

            'Pole No',

            'Consumer',

            'Latitude',

            'Longitude',

            'Created',

        ];
    }
}