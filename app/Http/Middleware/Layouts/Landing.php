<?php

namespace App\Http\Middleware\Layouts;

use Closure;
use Illuminate\Http\Request;

class Landing
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        inertia()->setRootView('landing');

        return $next($request);
    }
}
