<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Url;
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
        $meta = new Meta();
        $metaOg = new MetaOg();

        if ($urlInfo = Url::firstWhere('name', $request->getPathInfo())) {
            $pathId = $urlInfo->id;
            $meta = Meta::firstWhere('url_id', $pathId) ?? $meta;
            $metaOg = MetaOg::firstWhere('url_id', $pathId) ?? $meta;
        }

        View::composer([
            'layouts.main'
        ], function ($view) use ($meta, $metaOg) {
            $view->with([
                'meta' => $meta,
                'metaOg' => $metaOg,
            ]);
        });

        return $next($request);
    }
}
