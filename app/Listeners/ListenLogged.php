<?php

namespace App\Listeners;

use App\Events\Logged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ListenLogged
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
     * @param  Logged  $event
     * @return void
     */
    public function handle(Logged $event)
    {
        //
    }
}
