<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\CheckEmail;
use App\Rules\CheckUsername;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoginRegisterController extends Controller
{
    public function showLogin(Request $request)
    {
        return view('login-register.login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->orWhere('email', $request->username)->first();

        if ($user != null) {
            if (password_verify($request->password, $user->password)) {
                $request->session()->flash('message', 'Login Success');
                $request->session()->put('user-login', $user);
            } else {
                $request->session()->flash('warning', 'Wrong Password');
            }
        } else {
            $request->session()->flash('warning', 'Username / Email not found!');
        }

        return back();
    }

    public function showRegister(Request $request)
    {
        return view('login-register.create_account');
    }

    public function registerProcess(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
            'username' => ['required', new CheckUsername()],
            'email' => ['required', 'email', new CheckEmail()],
            'password' => ['required'],
            'confirm_password' => ['required', 'same:password']
        ]);

        User::create([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_BCRYPT),
            'status' => 1,
            'money' => 0
        ]);

        $request->session()->flash('message', 'Registration Completed!');

        return back();
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user-login');
        return redirect('login');
    }
}
