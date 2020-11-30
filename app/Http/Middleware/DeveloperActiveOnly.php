<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class DeveloperActiveOnly
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
        if(Session::get('developer-login')->status!=1){
            $request->session()->flash('warning', 'You have no access to this site for now...wait for admin confirmation or try signing in again if your status already active');
            return back();
        }else if(Session::get('developer-login')->status==0){
            $request->session()->flash('warning', 'You have been rejected by admin from becoming a developer...too bad :(');
            return back();
        }
        else{
            return $next($request);
        }
    }
}
