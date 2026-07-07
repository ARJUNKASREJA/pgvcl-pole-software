<?php

namespace App\Exports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProjectsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Project::select(
            'project_code',
            'project_name',
            'division',
            'subdivision',
            'village',
            'feeder',
            'dtc',
            'status'
        )->get();
    }

    public function headings(): array
    {
        return [

            'Project Code',

            'Project Name',

            'Division',

            'Subdivision',

            'Village',

            'Feeder',

            'DTC',

            'Status',

        ];
    }
}