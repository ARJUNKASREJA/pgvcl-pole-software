<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Log;

class ProjectObserver
{
    public function created(Project $project): void
    {
        Log::info('Project Created', [
            'id' => $project->id,
            'name' => $project->project_name,
        ]);
    }

    public function updated(Project $project): void
    {
        Log::info('Project Updated', [
            'id' => $project->id,
        ]);
    }

    public function deleted(Project $project): void
    {
        Log::info('Project Deleted', [
            'id' => $project->id,
        ]);
    }
}