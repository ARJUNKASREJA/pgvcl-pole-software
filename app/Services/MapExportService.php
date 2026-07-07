<?php

namespace App\Services;

use App\Models\Project;

class MapExportService
{
    public function export(
        Project $project
    ): array
    {
        return [

            'project'=>$project->project_name,

            'exported_at'=>now(),

            'status'=>'Success',

        ];
    }
}