<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Failed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;


class LogFailedAuthenticationAttempt
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
     * @param  \Illuminate\Auth\Events\Failed  $event
     * @return void
     */
    public function handle(Failed $event)
    {
        Log::channel('user_log')->debug("login failed", ['logging attemp failed']);
    }
}
