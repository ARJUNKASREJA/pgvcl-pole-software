<?php

namespace App\Repositories;

use App\Models\Project;
use App\Models\SurveySheet;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardRepository
{
    public function statistics(): array
    {
        return [

            'projects' => Project::count(),

            'active_projects' => Project::where('status', 1)->count(),

            'inactive_projects' => Project::where('status', 0)->count(),

            'surveys' => SurveySheet::count(),

            'users' => User::count(),

        ];
    }

    public function recentProjects($limit = 5)
    {
        return Project::latest()
            ->take($limit)
            ->get();
    }

    public function recentSurveys($limit = 5)
    {
        return SurveySheet::with('project')
            ->latest()
            ->take($limit)
            ->get();
    }

    public function surveysPerProject()
    {
        return SurveySheet::select(
                'project_id',
                DB::raw('COUNT(*) as total')
            )
            ->groupBy('project_id')
            ->with('project:id,project_name')
            ->get();
    }

    public function monthlySurveyReport()
    {
        return SurveySheet::select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->get();
    }

    public function latestUsers($limit = 5)
    {
        return User::latest()
            ->take($limit)
            ->get();
    }
}