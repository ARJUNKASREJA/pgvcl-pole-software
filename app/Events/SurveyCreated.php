<?php

namespace App\Events;

use App\Models\SurveySheet;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SurveyCreated
{
    use Dispatchable, SerializesModels;

    public SurveySheet $survey;

    public function __construct(SurveySheet $survey)
    {
        $this->survey = $survey;
    }
}