<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
        $current_language = 'ua';

        $first_url_segment = $request->segment(1);

        if (in_array($first_url_segment, ['ru'])) {
            $current_language = $first_url_segment;
        }

        app()->setLocale($current_language);

        $request->session()->put('language', $current_language);

        // Prepare prefixes for navigation links
        $defaultLangPrefix = $current_language === config('app.default_language') ? '' : $current_language;
        $generalLangPrefix = app()->getLocale() === config('app.default_language')
            ? $defaultLangPrefix
            : $defaultLangPrefix . '/';

        // Prepare items for the language selector
        $languageSelectorItems = [];

        foreach (config('app.languages') as $lang) {
            if ($lang !== $current_language) {
                $link = "/";

                if (Route::currentRouteName() === 'home') {
                    if ($lang !== config('app.default_language')) {
                        $link .= $lang;
                    }
                } else {
                    $url_path = $request->path();

                    // Cut url prefix
                    if ($current_language !== config('app.default_language')) {
                        $url_path = substr($url_path, 3);
                    }

                    if ($lang === config('app.default_language')) {
                        $link .= $url_path;
                    } else {
                        $link .= $lang . '/' . $url_path;
                    }
                }

                $languageSelectorItem = [
                    'link' => $link,
                    'lang' => $lang,
                ];

                $languageSelectorItems[] = $languageSelectorItem;
            }
        }

        \Illuminate\Support\Facades\View::composer([
            'layouts.main',
            'pages.index',
            'pages.course_card',
            'pages.course_card_main',
            'pages.course_details',
        ], function ($view) use ($defaultLangPrefix, $generalLangPrefix, $languageSelectorItems) {
            $view->with([
                'defaultLangPrefix' => $defaultLangPrefix,
                'generalLangPrefix' => $generalLangPrefix,
                'languageSelectorItems' => $languageSelectorItems
            ]);
        });

        return $next($request);
    }
}

