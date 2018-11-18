<?php

namespace App\Http\Middleware;

use Closure;

class CustomerSupport
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
        if ($request->user() && $request->user()->type != 'cs')
        {
            return new Response(view('unauthorized')->with('role', 'CS'));
        }
        return $next($request);
    }
}
