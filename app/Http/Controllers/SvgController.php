<?php

namespace App\Http\Controllers;

use App\Models\Drawing;
use App\Services\SvgGeneratorService;

class SvgController extends Controller
{
    public function generate(
        Drawing $drawing,
        SvgGeneratorService $service
    ){
        return response(

            $service->generate($drawing)

        )

        ->header(

            'Content-Type',

            'image/svg+xml'

        );
    }
}