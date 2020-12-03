<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AdminOnly
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
        if(!Session::has('admin-login')){
            $request->session()->flash('warning', 'You never login as admin :(');
            return redirect('admin/login');
        }else if(Session::has('user-login')){
            $request->session()->flash('warning', 'Please logout from your current session ');
            return redirect('/');
        }else if(Session::has('developer-login')){
            $request->session()->flash('warning', 'Please logout from your current session ');
            return redirect('developer/home');
        }else{
            return $next($request);
        }
        return $next($request);
    }
}
