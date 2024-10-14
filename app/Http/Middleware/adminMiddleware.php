<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
            public function handle(Request $request, Closure $next)
            {
                if (Auth::check() && Auth::user()->role === 'admin') {
                    return $next($request);
                }

                return redirect()->route('admin.login');
            }
}
