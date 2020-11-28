<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class DeveloperOnly
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
        if(!Session::has('developer-login')){
            $request->session()->flash('warning', 'You never login as developer :(');
            return redirect('developer/login');
        }else{
            return $next($request);
        }
    }
}
