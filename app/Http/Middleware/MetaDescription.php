<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Urls;
use App\Models\Meta;
use App\Models\MetaOg;
use Illuminate\Support\Facades\View;

class MetaDescription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $metaInfo = [
            'description' => '',
            'keywords' => '',
        ];
        $metaOgInfo = [
            'title' => '',
            'description' => '',
            'image' => '',
        ];

        $path = $request->getPathInfo();

        if ($request->segment(1) === 'ru') {
            $path = substr($path, 3);
        }

        if ($urlInfo = Urls::firstWhere('name',  $path)) {
            $pathId = $urlInfo->id;
            $meta = Meta::firstWhere('url_id', $pathId);
            $metaOg = MetaOg::firstWhere('url_id', $pathId);

            // Get localized data
            $lang = app()->getLocale();

            $metaInfo['description'] = $meta->getAttribute('description_' . $lang);
            $metaInfo['keywords'] = $meta->getAttribute('keywords_' . $lang);
            $metaOgInfo['title'] = $metaOg ->getAttribute('title_' . $lang);
            $metaOgInfo['description'] = $metaOg ->getAttribute('description_' . $lang);
            $metaOgInfo['image'] = $metaOg ->getAttribute('image_' . $lang);
        }

        View::composer([
            'layouts.main'
        ], function ($view) use ($metaInfo, $metaOgInfo) {
            $view->with([
                'meta' => $metaInfo,
                'metaOg' => $metaOgInfo,
            ]);
        });

        return $next($request);
    }
}
