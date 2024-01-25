<?php

namespace Erikgreasy\LaravelComingSoon\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ComingSoonMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (config('coming-soon.enabled') && !$request->routeIs('coming-soon')) {
            return redirect(route('coming-soon'));
        }

        return $next($request);
    }
}
