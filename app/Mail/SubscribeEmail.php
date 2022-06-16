<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscribeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subs;

    public function __construct($subscriber)
    {
        $this->subs = $subscriber;
    }

    public function build()
    {
        return $this->view("emails.verify");
    }
}
