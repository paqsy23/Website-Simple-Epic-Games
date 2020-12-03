<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class WithoutLogin
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
        if(Session::has('developer-login')){
            return redirect('developer/home');
        }else if(Session::has('admin-login')){
            return redirect('admin/home');
        }
        return $next($request);
    }
}
