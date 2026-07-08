<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SurveySheet;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'projects'   => Project::count(),
            'villages'   => Project::distinct('village')->count('village'),
            'feeders'    => Project::distinct('feeder')->count('feeder'),
            'totalPoles' => SurveySheet::count(),
        ]);
    }
}