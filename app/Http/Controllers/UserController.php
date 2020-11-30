<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Game;
use App\Models\h_trans;
use App\Models\Library;
use App\Models\tag;
use App\Models\Transaction;
use App\Rules\CheckPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

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

    public function checkout(Request $request,$id)
    {
        $user = User::find(Session::get('user-login')->id);
        $game = Game::find($id);

        return view('game.checkout',["game" => $game, "user" => $user]);
    }

    public function done(Request $request,$id = 1)
    {

        $user = User::find(Session::get('user-login')->id);
        $game = Game::find($id);
        $money = $user->money - $game->price;
        $user->money = $money;
        $user->save();

        $user->games()->attach($game->id);

        Transaction::create([
            'tanggal_trans'=>Carbon::now(),
            'game_price'=>$game->price,
            'game_id'=>$game->id,
            'user_id'=>$user->id
        ]);

        $request->session()->flash('message', 'Transaction Completed');

        //masuk library

        return redirect('/');

    }
}
