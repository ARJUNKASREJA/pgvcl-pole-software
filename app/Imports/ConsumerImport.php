<?php

namespace App\Imports;

use App\Models\Consumer;
use Maatwebsite\Excel\Concerns\ToModel;

class ConsumerImport implements ToModel
{
    public function model(array $row)
    {
        return new Consumer([

            'project_id'=>$row[0],

            'pole_id'=>$row[1],

            'consumer_no'=>$row[2],

            'consumer_name'=>$row[3],

            'meter_no'=>$row[4],

            'mobile'=>$row[5],

            'phase'=>$row[6],

            'connection_type'=>$row[7],

            'load'=>$row[8],

            'status'=>1,

        ]);
    }
}