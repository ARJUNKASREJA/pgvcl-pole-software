<?php

namespace App\Services;

use App\Models\Drawing;

class DrawingExportService
{
    public function export(
        Drawing $drawing
    ): array
    {
        return [

            'svg'=>$drawing->svg_file,

            'dwg'=>$drawing->dwg_file,

            'pdf'=>$drawing->pdf_file,

        ];
    }
}