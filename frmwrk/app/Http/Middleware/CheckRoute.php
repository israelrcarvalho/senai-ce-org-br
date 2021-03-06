<?php

namespace App\Http\Middleware;

use Closure;


class CheckRoute
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (is_null($request->session()->get('success'))) {
            return redirect()->route('paravoce');
        }

        return $next($request);
    }
}
