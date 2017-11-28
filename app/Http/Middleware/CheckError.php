<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class CheckError
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Exception $exception
     * @return \Illuminate\Http\Response
     */
    public function handle($request, Exception $exception)
    {
        if($exception instanceof MethodNotAllowedHttpException) {
            //return redirect('home');
            return response()->json([
                'success' => 0,
                'message' => 'Method is not allowed'
            ], 405);
        }

        return parent::render($request, $exception);
    }
}
