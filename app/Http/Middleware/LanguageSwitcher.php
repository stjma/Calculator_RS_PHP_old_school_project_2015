<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;


class LanguageSwitcher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //MIddleware pour changer la langue
        App::setLocale((string)Session::get('language'));
        return $next($request);
    }
}
