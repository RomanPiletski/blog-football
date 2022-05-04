<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SingUpNotification extends Notification implements ShouldQueue
{
    use Queueable;
    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->view("admin.mail", ["admin"=>$notifiable, "user" => $this->user]);
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
