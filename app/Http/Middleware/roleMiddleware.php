<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class roleMiddleware
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
        if (!Auth::check()) {
            return redirect()->route('show_form_login');
        }else{
            if(!Auth::user()->is_admin){
                return redirect()->route('pfr.list');
            }
            return $next($request);
        }
    }
}
