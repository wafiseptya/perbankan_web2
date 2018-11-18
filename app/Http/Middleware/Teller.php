<?php

namespace App\Http\Middleware;

use Closure;

class Teller
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
        if ($request->user() && $request->user()->type != 'teller')
        {
            return new Response(view('unauthorized')->with('role', 'TELLER'));
        }
        return $next($request);
    }
}
