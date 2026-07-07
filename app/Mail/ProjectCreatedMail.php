<?php

namespace App\Mail;

use App\Models\Project;
use Illuminate\Mail\Mailable;

class ProjectCreatedMail extends Mailable
{
    public function __construct(
        public Project $project
    ) {
    }

    public function build()
    {
        return $this

            ->subject('Project Created')

            ->view('emails.project-created')

            ->with([
                'project'=>$this->project
            ]);
    }
}