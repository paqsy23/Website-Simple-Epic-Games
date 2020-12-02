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
        $user_login = $request->session()->get('user-login');
        $orders = Transaction::where('user_id', $user_login->id)->get();

        return view('account.order', [
            'location' => 'orders',
            'orders' => $orders
        ]);
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
        if($money<0){
            $request->session()->flash('warning', 'Your wallet is not enough to buy this game');
            return back();
        }
        $user->money = $money;
        $user->save();

        //masuk library ikiii
        $user->games()->attach($game->id);

        Transaction::create([
            'tanggal_trans'=>Carbon::now(),
            'game_price'=>$game->price,
            'game_id'=>$game->id,
            'user_id'=>$user->id
        ]);

        $request->session()->put('user-login', $user);
        $request->session()->flash('message', 'Transaction Completed');

        return redirect('/');
    }

    public function showTopUp()
    {
        return view('account.topupwallet');
    }

    public function topup(Request $request,$value)
    {
        $user = User::find(Session::get('user-login')->id);
        $user->money = $user->money + $value;
        $user->save();

        $request->session()->put('user-login', $user);
        $request->session()->flash('message', 'Transaction Completed');
        return redirect('/');
    }
    public function library(Request $request)
    {
        $user = User::find(Session::get('user-login')->id);
        $library = library::where('user_id',$user->id)->get();
        $game = Game::where('status', 1)->get();
        // dd($library[0]->game_id);
        return view('account.library',['library'=>$library,'games'=>$game]);
    }
}
