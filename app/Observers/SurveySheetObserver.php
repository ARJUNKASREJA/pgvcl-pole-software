<?php

namespace App\Observers;

use App\Models\SurveySheet;
use Illuminate\Support\Facades\Log;

class SurveySheetObserver
{
    public function created(SurveySheet $survey): void
    {
        Log::info('Survey Created', [
            'id' => $survey->id,
            'survey_no' => $survey->survey_no,
        ]);
    }

    public function updated(SurveySheet $survey): void
    {
        Log::info('Survey Updated', [
            'id' => $survey->id,
        ]);
    }

    public function deleted(SurveySheet $survey): void
    {
        Log::info('Survey Deleted', [
            'id' => $survey->id,
        ]);
    }
}