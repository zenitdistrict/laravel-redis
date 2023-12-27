<?php

namespace App\Http\Controllers;

use App\Events\UrlCreated;
use App\Models\Url;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;

class UrlController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        if ($cache = Cache::get('page.2')) {
            return $cache;
        }

        $urls = Url::paginate(5);
        Cache::put('page.2', $urls, 60);

        return $urls;
    }

    public function createUrl()
    {
        $url = new Url();
        $url->url = '/asdasd/qwdq';
        $url->name = 'new name';
        $url->save();

        UrlCreated::dispatch($url);
    }
}
