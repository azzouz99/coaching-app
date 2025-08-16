<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
                $available = config('app.available_locales', ['ar','fr']);
        $locale = $request->route('locale')
            ?? Session::get('locale')
            ?? config('app.locale');

        if (! in_array($locale, $available)) {
            $locale = config('app.fallback_locale', 'fr');
        }

        App::setLocale($locale);
        Session::put('locale', $locale);

        // Optional: set HTML dir for views (ltr/rtl)
        view()->share('htmlDir', $locale === 'ar' ? 'rtl' : 'ltr');
        view()->share('htmlLang', $locale);

        // Optional: Carbon locale
        try { \Carbon\Carbon::setLocale($locale); } catch (\Throwable $e) {}
        
        return $next($request);
    }
}
