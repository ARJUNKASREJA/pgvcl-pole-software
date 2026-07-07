<?php

namespace App\Actions;

use App\Models\Project;

class UpdateProjectAction
{
    public function execute(Project $project, array $data): Project
    {
        $project->update([

            'project_name' => $data['project_name'],

            'project_code' => $data['project_code'],

            'division' => $data['division'] ?? null,

            'subdivision' => $data['subdivision'] ?? null,

            'village' => $data['village'] ?? null,

            'feeder' => $data['feeder'] ?? null,

            'dtc' => $data['dtc'] ?? null,

            'description' => $data['description'] ?? null,

            'status' => $data['status'] ?? 1,

        ]);

        return $project->fresh();
    }
}