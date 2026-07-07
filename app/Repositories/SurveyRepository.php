<?php

namespace App\Repositories;

use App\Models\SurveySheet;

class SurveyRepository
{
    public function all()
    {
        return SurveySheet::with('project')
            ->latest()
            ->paginate(20);
    }

    public function find(int $id)
    {
        return SurveySheet::with('project')
            ->findOrFail($id);
    }

    public function create(array $data)
    {
        return SurveySheet::create($data);
    }

    public function update(int $id, array $data)
    {
        $survey = SurveySheet::findOrFail($id);

        $survey->update($data);

        return $survey;
    }

    public function delete(int $id): bool
    {
        return SurveySheet::findOrFail($id)->delete();
    }

    public function count(): int
    {
        return SurveySheet::count();
    }

    public function latest(int $limit = 10)
    {
        return SurveySheet::latest()
            ->take($limit)
            ->get();
    }

    public function byProject(int $projectId)
    {
        return SurveySheet::where('project_id', $projectId)
            ->latest()
            ->get();
    }

    public function search(?string $keyword)
    {
        return SurveySheet::where('consumer_name', 'like', "%{$keyword}%")
            ->orWhere('consumer_no', 'like', "%{$keyword}%")
            ->orWhere('pole_no', 'like', "%{$keyword}%")
            ->paginate(20);
    }
}