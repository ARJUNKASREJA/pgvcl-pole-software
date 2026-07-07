<?php

namespace App\Services;

use App\Models\Drawing;

class DwgGeneratorService
{
    public function generate(
        Drawing $drawing
    ): array
    {
        return [

            'drawing_no'=>$drawing->drawing_no,

            'pole'=>$drawing->pole->pole_no,

            'project'=>$drawing->project->project_name,

            'status'=>'Generated',

        ];
    }
}