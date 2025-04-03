<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ManagerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!empty(auth('web')->check())) {
            if (auth('web')->user()->role == 'manager') {
                return $next($request);
            } else {
                auth('web')->logout();
                return redirect('/')->with("errorMsg", "Access Denied. You are not allowed to view this resource.");
            }
        } else {
            auth('web')->logout();
            return redirect(url('/'));
        }
    }
}
