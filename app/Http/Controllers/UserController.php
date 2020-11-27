<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\CheckPassword;
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

    public function editDetails(Request $request)
    {
        $user_login = $request->session()->get('user-login');

        $user = User::find($user_login->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $request->session()->put('user-login', $user);
    }

    public function editPassword(Request $request)
    {
        $user_login = $request->session()->get('user-login');

        if (!password_verify($request->current_password, $user_login->password)) {
            $request->session()->flash('password', 'Current password is wrong');
        } else {
            $user = User::find($user_login->id);

            $user->password = password_hash($request->new_password, PASSWORD_BCRYPT);
            $user->save();

            $request->session()->put('user-login', $user);
        }
    }
}
