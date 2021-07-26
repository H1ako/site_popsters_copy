<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;
use Config;
use Session;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('locale')){
            $raw_locale = Session::get('locale');
            if (in_array($raw_locale, Config::get('app.locales'))) {
                $locale = $raw_locale;
            }
            else $locale = Config::get('app.locale');
        }
        else{
            Session::put('locale', Config::get('app.locale'));
            $locale = Session::get('locale');
        }
        App::setLocale($locale);
        return $next($request);
    }
}
