<?php

namespace App\Http\Controllers;

use App\Events\UrlCreated;
use App\Models\Url;
use App\Services\UrlCacheService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class UrlController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(UrlCacheService $cacheService, Request $request)
    {
        if (!$request->input('page') || $request->input('page') == 1) {
            return $cacheService->getFirstPage();
        }

        return Url::paginate(5);
    }

    // TODO: remove
//    public function createUrl()
//    {
//        $url = new Url();
//        $url->url = '/asdasd/qwdq';
//        $url->name = 'new name';
//        $url->save();
//
//        UrlCreated::dispatch($url);
//    }
}
