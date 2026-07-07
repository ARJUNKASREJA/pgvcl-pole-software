<?php

namespace App\Policies;

use App\Models\SurveySheet;
use App\Models\User;

class SurveySheetPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, SurveySheet $survey): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, SurveySheet $survey): bool
    {
        return true;
    }

    public function delete(User $user, SurveySheet $survey): bool
    {
        return true;
    }
}