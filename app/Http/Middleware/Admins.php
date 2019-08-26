<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class Admins
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard='admin')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/hr/auth/login');
        }

        return $next($request);

}
}
