<?php

namespace App\Http\Controllers;

use App\Models\SurveySheet;
use App\Services\SurveySheetService;
use App\Http\Requests\StoreSurveySheetRequest;
use App\Http\Requests\UpdateSurveySheetRequest;

class SurveySheetController extends Controller
{
    public function __construct(
        protected SurveySheetService $service
    ) {
    }

    public function index()
    {
        $surveys = $this->service->list();

        return view(
            'survey-sheets.index',
            compact('surveys')
        );
    }

    public function create()
    {
        return view('survey-sheets.create');
    }

    public function store(
        StoreSurveySheetRequest $request
    ) {
        $this->service->store(
            $request->validated()
        );

        return redirect()
            ->route('survey-sheets.index')
            ->with(
                'success',
                'Survey Created Successfully.'
            );
    }

    public function edit(
        SurveySheet $surveySheet
    ) {
        return view(
            'survey-sheets.edit',
            compact('surveySheet')
        );
    }

    public function update(
        UpdateSurveySheetRequest $request,
        SurveySheet $surveySheet
    ) {
        $this->service->update(
            $surveySheet,
            $request->validated()
        );

        return redirect()
            ->route('survey-sheets.index')
            ->with(
                'success',
                'Survey Updated Successfully.'
            );
    }

    public function destroy(
        SurveySheet $surveySheet
    ) {
        $this->service->delete($surveySheet);

        return redirect()
            ->route('survey-sheets.index')
            ->with(
                'success',
                'Survey Deleted Successfully.'
            );
    }
}