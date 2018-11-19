<?php

namespace App\Http\Middleware;

use Closure;

class CustomerService
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
        if ($request->user() && $request->user()->role != 'cs')
        {
            return redirect('forbid');
        }
        return $next($request);
    }
}
