<?php

namespace App\Actions;

use App\Models\SurveySheet;
use App\Services\ImageUploadService;

class DeleteSurveyAction
{
    public function execute(SurveySheet $survey): bool
    {
        if (!empty($survey->photo)) {
            ImageUploadService::delete($survey->photo);
        }

        return $survey->delete();
    }
}