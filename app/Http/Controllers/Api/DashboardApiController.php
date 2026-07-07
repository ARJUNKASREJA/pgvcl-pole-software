<?php

namespace App\Http\Controllers\Api;

use App\Models\Pole;
use App\Models\Survey;
use App\Models\Project;
use App\Models\Drawing;
use App\Http\Controllers\Controller;

class DashboardApiController extends Controller
{
    public function index()
    {
        return response()->json([

            'projects'=>Project::count(),

            'surveys'=>Survey::count(),

            'poles'=>Pole::count(),

            'drawings'=>Drawing::count(),

        ]);
    }
}