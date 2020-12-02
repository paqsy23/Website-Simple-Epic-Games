<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class UserWithoutLogin
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
        if(Session::has('user-login')){
            return redirect('account');
        } else if(Session::get('developer-login')) {
            return redirect('developer/login');
        } else if (Session::get('admin-login')) {
            return redirect('admin/home');
        } else {
            return $next($request);
        }
    }
}
