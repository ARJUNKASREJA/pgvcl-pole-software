<?php

namespace App\Http\Controllers;

use App\Models\SurveySheet;
use Illuminate\Http\Request;

class SurveySheetController extends Controller
{
    public function index()
    {
        $surveySheets = SurveySheet::latest()->paginate(20);

        return view('survey-sheets.index', compact('surveySheets'));
    }

    public function create()
    {
        return view('survey-sheets.create');
    }
}