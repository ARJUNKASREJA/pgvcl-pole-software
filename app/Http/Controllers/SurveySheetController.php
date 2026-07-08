<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSurveySheetRequest;
use App\Http\Requests\UpdateSurveySheetRequest;
use App\Models\Project;
use App\Models\SurveySheet;
use App\Services\AutoNumberService;
use App\Services\SurveySheetService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SurveySheetController extends Controller
{
    public function __construct(
        protected SurveySheetService $service
    ) {
    }

    public function index(Request $request): View
    {
        $query = SurveySheet::query()->with('project');

        if ($request->filled('search')) {
            $search = trim($request->search);

            $query->where(function ($q) use ($search): void {
                $q->where('survey_no', 'like', "%{$search}%")
                    ->orWhere('pole_no', 'like', "%{$search}%")
                    ->orWhere('consumer_name', 'like', "%{$search}%")
                    ->orWhere('consumer_no', 'like', "%{$search}%")
                    ->orWhere('mobile', 'like', "%{$search}%")
                    ->orWhereHas('project', function ($projectQuery) use ($search): void {
                        $projectQuery->where('project_name', 'like', "%{$search}%")
                            ->orWhere('project_code', 'like', "%{$search}%");
                    });
            });
        }

        $surveys = $query->latest()->paginate(10)->withQueryString();

        return view('survey-sheets.index', compact('surveys'));
    }

    public function create(): View
    {
        $projects = Project::orderBy('project_name')->get();

        return view('survey-sheets.create', compact('projects'));
    }

    public function store(StoreSurveySheetRequest $request)
    {
        $data = $request->validated();

        if (empty($data['survey_no'])) {
            $data['survey_no'] = AutoNumberService::surveyNo();
        }

        $this->service->store($data);

        return redirect()
            ->route('survey-sheets.index')
            ->with('success', 'Survey Created Successfully.');
    }

    public function show(SurveySheet $surveySheet): View
    {
        return view('survey-sheets.show', compact('surveySheet'));
    }

    public function edit(SurveySheet $surveySheet): View
    {
        $projects = Project::orderBy('project_name')->get();

        return view('survey-sheets.edit', compact('surveySheet', 'projects'));
    }

    public function update(UpdateSurveySheetRequest $request, SurveySheet $surveySheet)
    {
        $data = $request->validated();

        if (empty($data['survey_no'])) {
            $data['survey_no'] = $surveySheet->survey_no ?? AutoNumberService::surveyNo();
        }

        $this->service->update($surveySheet, $data);

        return redirect()
            ->route('survey-sheets.index')
            ->with('success', 'Survey Updated Successfully.');
    }

    public function destroy(SurveySheet $surveySheet)
    {
        $this->service->delete($surveySheet);

        return redirect()
            ->route('survey-sheets.index')
            ->with('success', 'Survey Deleted Successfully.');
    }
}