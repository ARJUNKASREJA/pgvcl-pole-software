<?php

namespace App\Notifications;

use App\Models\SurveySheet;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SurveyCreatedNotification extends Notification
{
    use Queueable;

    public function __construct(
        public SurveySheet $survey
    ) {
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)

            ->subject('Survey Created')

            ->line('Survey Saved Successfully.')

            ->line('Survey No : '.$this->survey->survey_no)

            ->success();
    }
}