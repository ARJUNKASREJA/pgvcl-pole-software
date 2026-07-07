<?php

namespace App\Services;

use App\Models\SurveySheet;
use App\Repositories\SurveySheetRepository;

class SurveySheetService
{
    public function __construct(
        protected SurveySheetRepository $repository
    ) {
    }

    public function list()
    {
        return $this->repository->all();
    }

    public function store(array $data): SurveySheet
    {
        return $this->repository->create($data);
    }

    public function update(
        SurveySheet $survey,
        array $data
    ): bool {
        return $this->repository->update($survey, $data);
    }

    public function delete(SurveySheet $survey): bool
    {
        return $this->repository->delete($survey);
    }
}