<?php

namespace App\Http\Middleware;

use Closure;

class Authcheck
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
        if (auth()->user() == null){
            return redirect('/sports/login');
        }
        return $next($request);
    }
}
