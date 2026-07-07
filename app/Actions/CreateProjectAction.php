<?php

namespace App\Actions;

use App\Models\Project;
use App\Services\AutoNumberService;

class CreateProjectAction
{
    public function execute(array $data): Project
    {
        if (empty($data['project_code'])) {
            $data['project_code'] = AutoNumberService::projectCode();
        }

        return Project::create([

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
    }
}