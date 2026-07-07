<?php

namespace App\Http\Controllers\Api;

use App\Models\Survey;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurveyApiController extends Controller
{
    public function index()
    {
        return Survey::latest()->paginate(20);
    }

    public function show(Survey $survey)
    {
        return $survey;
    }

    public function store(Request $request)
    {
        return Survey::create(
            $request->all()
        );
    }

    public function update(
        Request $request,
        Survey $survey
    ){
        $survey->update(
            $request->all()
        );

        return $survey;
    }

    public function destroy(
        Survey $survey
    ){
        $survey->delete();

        return response()->json([
            'success'=>true
        ]);
    }
}