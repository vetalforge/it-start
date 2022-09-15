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
            //session()->put('lang', $language);
        }   elseif (session('lang')) {
            //$language = session('lang');
        }

        app()->setLocale($language);

        return $next($request);
    }
}

