<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
        $language = 'ua';

        $first_segment = $request->segment(1);

        if (in_array($first_segment, ['en', 'ru'])) {
            $language = $first_segment;
        }

        app()->setLocale($language);

        \Illuminate\Support\Facades\View::composer([
            'layouts.main',
            'pages.course_card_main',
        ], function ($view) use ($language) {
            $defaultLangPrefix = $language === config('app.default_language') ? '' : $language;
            $generalLangPrefix = app()->getLocale() === config('app.default_language')
                ? $defaultLangPrefix
                : $defaultLangPrefix . '/';

            $view->with([
                'defaultLangPrefix' => $defaultLangPrefix,
                'generalLangPrefix' => $generalLangPrefix
            ]);
        });

        return $next($request);
    }
}

