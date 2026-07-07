<?php

namespace App\Http\Controllers;

use App\Models\Drawing;
use App\Services\DwgGeneratorService;

class DwgController extends Controller
{
    public function generate(
        Drawing $drawing,
        DwgGeneratorService $service
    ){
        return response()->json(

            $service->generate($drawing)

        );
    }
}