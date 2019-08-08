<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class authenticate_user {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('hr_login');
        }
        return $next($request);
    }



}