<?php

namespace CodeDelivery\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            if (Auth::user()->role == 'admin') {
                return redirect('admin/categories');
            }elseif (Auth::user()->role == 'client') {
                return redirect('customer/order');
            }elseif (Auth::user()->role == 'deliveryman') {
                return redirect('admin/orders/list');
            }else {
                return redirect('/');
            }

        }

        return $next($request);
    }
}
