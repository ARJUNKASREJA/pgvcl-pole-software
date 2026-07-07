<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Services\MapExportService;

class ExportController extends Controller
{
    public function project(
        Project $project,
        MapExportService $service
    ){
        return response()->json(

            $service->export(

                $project

            )

        );
    }
}