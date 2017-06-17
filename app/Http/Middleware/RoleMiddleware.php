<?php

namespace App\Http\Middleware;

use Auth; 
use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string $role 
     * @param  string $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $permission)
    {
        if (Auth::guest()) {
            return back(302);
        }

        if (auth()->user()->hasRole($role)) {
            return $next($request);
        }

        if (auth()->user()->can($permission)) {
           return $next($request);
        }

        return abort(403);
    }
}
