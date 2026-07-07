<?php

namespace App\Services;

use App\Models\Drawing;

class PdfGeneratorService
{
    public function generate(
        Drawing $drawing
    ): string
    {
        return storage_path(

            'app/public/drawings/'.

            $drawing->drawing_no.

            '.pdf'

        );
    }
}