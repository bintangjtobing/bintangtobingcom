<?php

namespace App\Http\Middleware;

use Closure;

class CheckType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$types)
    {
        if (in_array($request->user()->type, $types)) {
            return $next($request);
        }

        return redirect('/');
    }
}
