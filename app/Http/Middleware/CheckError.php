<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Testing\HttpException;
use Mockery\Exception;
use Symfony\Component\Debug\ExceptionHandler;

class CheckError
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
        return $next($request);
    }
}
