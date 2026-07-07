<?php

namespace App\Imports;

use App\Models\Pole;
use Maatwebsite\Excel\Concerns\ToModel;

class PoleImport implements ToModel
{
    public function model(array $row)
    {
        return new Pole([

            'project_id'=>$row[0],

            'pole_no'=>$row[1],

            'pole_type'=>$row[2],

            'pole_height'=>$row[3],

            'latitude'=>$row[4],

            'longitude'=>$row[5],

            'status'=>1,

        ]);
    }
}