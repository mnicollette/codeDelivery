<?php

namespace CodeDelivery\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{

    public function __construct()
    {
        Auth::class;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        //dd('OPa veio - '.Auth::check());
        if(!Auth::check()) {
            return redirect('/auth/login');
        }

        if(Auth::user()->role <> $role) {
            return redirect('/auth/login');
        }

        return $next($request);
    }
}
