<?php

namespace App\Imports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\ToModel;

class ProjectsImport implements ToModel
{
    public function model(array $row)
    {
        return new Project([

            'project_code' => $row[0],

            'project_name' => $row[1],

            'division' => $row[2],

            'subdivision' => $row[3],

            'village' => $row[4],

            'feeder' => $row[5],

            'dtc' => $row[6],

            'status' => $row[7],

        ]);
    }
}