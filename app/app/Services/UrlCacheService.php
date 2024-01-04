<?php

namespace App\Services;

use App\Models\Url;
use Illuminate\Support\Facades\Cache;

class UrlCacheService
{
    private $cacheKey = 'page.1';

    public function getFirstPage()
    {
        return Cache::remember($this->cacheKey, now()->addMinutes(10), function () {
            return $this->getFirstPageFromDB();
        });
    }

    public function updateFirstPage()
    {
        $urls = $this->getFirstPageFromDB();
        Cache::delete($this->cacheKey);
        Cache::put($this->cacheKey, $urls, now()->addMinutes(10));
    }

    // TODO: move to UrlService(for example) to work with DB
    public function getFirstPageFromDB()
    {
        return Url::paginate(perPage: 5, page: 1);
    }
}
