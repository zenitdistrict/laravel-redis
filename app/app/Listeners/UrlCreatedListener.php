<?php

namespace App\Listeners;

use App\Events\UrlCreated;
use App\Services\UrlCacheService;

class UrlCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct(private readonly UrlCacheService $cacheService)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UrlCreated $event): void
    {
        // TODO: check that new Url is on the first page
        $this->cacheService->updateFirstPage();
    }
}
