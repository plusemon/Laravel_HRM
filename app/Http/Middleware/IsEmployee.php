<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsEmployee
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
         if (Auth::user() &&  Auth::user()->type == 'Employee') {
                return $next($request);
         }elseif (Auth::user() &&  Auth::user()->type == 'Admin') {
            return redirect('/admin');
        }elseif (Auth::user() &&  Auth::user()->type == 'Manager') {
            return redirect('/manager');
        }

        return redirect('/login');
    }
}
