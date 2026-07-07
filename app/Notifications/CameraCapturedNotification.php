<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class CameraCapturedNotification extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [

            'title'=>'Camera Photo Uploaded',

            'message'=>'New pole photograph captured successfully.'

        ];
    }
}