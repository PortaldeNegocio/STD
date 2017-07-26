<?php

namespace STD\Listeners;

use STD\Events\RegistrationCompleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use STD\Mail\RegistrationEmail;

class SendRegistrationEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RegistrationCompleted  $event
     * @return void
     */
    public function handle(RegistrationCompleted $event)
    {
        Mail::to($event->user)->send(new RegistrationEmail($event->user));
    }
}
