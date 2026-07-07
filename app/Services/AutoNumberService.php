<?php

namespace App\Services;

use App\Models\SurveySheet;

class AutoNumberService
{
    public static function surveyNo(): string
    {
        $last = SurveySheet::latest('id')->first();

        $next = $last ? ($last->id + 1) : 1;

        return 'SRV-' . date('Y') . '-' . str_pad($next, 5, '0', STR_PAD_LEFT);
    }

    public static function projectCode(): string
    {
        return 'PRJ-' . date('YmdHis');
    }
}