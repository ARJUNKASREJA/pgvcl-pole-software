<?php

namespace App\Http\Controllers;

use App\Models\Drawing;
use App\Services\PdfGeneratorService;

class PdfController extends Controller
{
    public function generate(
        Drawing $drawing,
        PdfGeneratorService $service
    ){
        return response()->json([

            'pdf'=>

            $service->generate(

                $drawing

            )

        ]);
    }
}