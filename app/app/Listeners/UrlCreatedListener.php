<?php

namespace App\Listeners;

use App\Events\UrlCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UrlCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UrlCreated $event): void
    {
        echo ('URL CREATED !!!!!!!!!');
        //
    }
}
