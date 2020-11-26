<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        $user_login = $request->session()->get('user-login');

        if ($user_login == null) {
            $request->session()->flash('warning', 'Please Login Firstly');
            return redirect('login');
        }

        return view('account.dashboard', [
            'location' => 'dashboard'
        ]);
    }

    public function order(Request $request)
    {

    }

    public function addresses(Request $request)
    {

    }

    public function accountDetails(Request $request)
    {
        $user_login = $request->session()->get('user-login');

        if ($user_login == null) {
            $request->session()->flash('warning', 'Please Login Firstly');
            return redirect('login');
        }

        return view('account.account_details', [
            'location' => 'account-details'
        ]);
    }
}
