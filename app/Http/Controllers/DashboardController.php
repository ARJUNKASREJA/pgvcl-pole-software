<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SurveySheet;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'projects'      => Project::count(),
            'totalConsumers'=> SurveySheet::count(),
            'totalPoles'    => SurveySheet::whereNotNull('pole_no')->count(),
            'totalMeters'   => SurveySheet::whereNotNull('meter_no')->count(),
            'transformers'  => SurveySheet::whereNotNull('transformer')->distinct()->count('transformer'),
            'users'         => User::count(),
        ]);
    }
}