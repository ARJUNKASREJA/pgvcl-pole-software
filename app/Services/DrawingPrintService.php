<?php

namespace App\Services;

use App\Models\Drawing;

class DrawingPrintService
{
    public function generate(
        Drawing $drawing
    ): array
    {
        return [

            'drawing_no' => $drawing->drawing_no,

            'project' => $drawing->project->project_name,

            'pole' => $drawing->pole->pole_no,

            'print_date' => now(),

        ];
    }
}