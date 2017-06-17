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

        if (! $request->user()->hasRole($role)) {
            abort(403); // Unauthorized. 
        }

        if (! $request->user()->can($permission)) {
            abort(403); // Unauthorized.
        }

        return $next($request);
    }
}
