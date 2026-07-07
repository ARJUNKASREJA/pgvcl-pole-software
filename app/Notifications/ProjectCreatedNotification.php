<?php

namespace App\Notifications;

use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ProjectCreatedNotification extends Notification
{
    use Queueable;

    public function __construct(
        public Project $project
    ) {
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)

            ->subject('New Project Created')

            ->line('Project Created Successfully.')

            ->line('Project : '.$this->project->project_name)

            ->line('Code : '.$this->project->project_code)

            ->success();
    }
}