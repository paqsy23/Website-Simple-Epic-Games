<?php

namespace App\Http\Controllers;

use App\Models\developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $developer = developer::where('username',$request->username)->first();

        if ($developer != null) {
            if (password_verify($request->password, $developer->password)) {
                // $request->session()->put('developer-login', $developer);
                return redirect('developer/home');
            } else {
                $request->session()->flash('warning', 'Wrong Password');
            }
        } else {
            $request->session()->flash('warning', 'Username / Email not found!');
        }

        return redirect('developer/');
    }

    public function home()
    {
        $developer = developer::find(1);
        return view('developer.home',['developer'=>$developer]);
    }
}
