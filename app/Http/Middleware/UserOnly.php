<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class UserOnly
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
        if(!Session::has('user-login')){
            $request->session()->flash('warning', 'You must login before access this page');
            return redirect('account/login');
        }else if(Session::get('developer-login') || Session::get('admin-login')){
            $request->session()->flash('warning', 'You must login as a user to access this page');
            return redirect('account/login');
        }
        else{
            return $next($request);
        }
    }
}
