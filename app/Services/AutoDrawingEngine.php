<?php

namespace App\Services;

use App\Models\Drawing;

class AutoDrawingEngine
{
    public function build(
        Drawing $drawing
    ): bool
    {
        $drawing->update([

            'svg_file'=>'drawings/'.$drawing->drawing_no.'.svg',

            'dwg_file'=>'drawings/'.$drawing->drawing_no.'.dwg',

            'pdf_file'=>'drawings/'.$drawing->drawing_no.'.pdf',

        ]);

        return true;
    }
}