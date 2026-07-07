<?php

namespace App\Mail;

use App\Models\SurveySheet;
use Illuminate\Mail\Mailable;

class SurveyCreatedMail extends Mailable
{
    public function __construct(
        public SurveySheet $survey
    ) {
    }

    public function build()
    {
        return $this

            ->subject('Survey Created')

            ->view('emails.survey-created')

            ->with([
                'survey'=>$this->survey
            ]);
    }
}