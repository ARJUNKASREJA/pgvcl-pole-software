<?php

namespace App\Imports;

use App\Models\SurveySheet;
use Maatwebsite\Excel\Concerns\ToModel;

class SurveyImport implements ToModel
{
    public function model(array $row)
    {
        return new SurveySheet([

            'survey_no' => $row[0],

            'project_id' => $row[1],

            'pole_no' => $row[2],

            'consumer_name' => $row[3],

            'latitude' => $row[4],

            'longitude' => $row[5],

        ]);
    }
}