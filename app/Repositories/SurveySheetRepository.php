<?php

namespace App\Repositories;

use App\Models\SurveySheet;

class SurveySheetRepository
{
    public function all()
    {
        return SurveySheet::latest()->get();
    }

    public function find(int $id): SurveySheet
    {
        return SurveySheet::findOrFail($id);
    }

    public function create(array $data): SurveySheet
    {
        return SurveySheet::create($data);
    }

    public function update(SurveySheet $survey, array $data): bool
    {
        return $survey->update($data);
    }

    public function delete(SurveySheet $survey): bool
    {
        return $survey->delete();
    }
}