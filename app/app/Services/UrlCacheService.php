<?php

namespace App\Services;

use App\Models\Url;
use Illuminate\Support\Facades\Cache;

class UrlCacheService
{
    public function getFirstPage()
    {
        if ($cache = Cache::get('page.1')) {
            return $cache;
        }

        $urls = $this->getFirstPageFromDB();
        Cache::put('page.1', $urls, 60);

        return $urls;
    }

    public function updateFirstPage()
    {
        $urls = $this->getFirstPageFromDB();
        Cache::delete('page.1');
        Cache::put('page.1', $urls, 60);
    }

    // TODO: move to UrlService(for example) to work with DB
    public function getFirstPageFromDB()
    {
        return Url::paginate(perPage: 5, page: 1);
    }
}
