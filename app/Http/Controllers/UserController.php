<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Game;
use App\Models\tag;
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

    public function checkout(Request $request)
    {
        $user_login = $request->session()->get('user-login');
        $user = User::find($user_login->id);
        $game = [
            "name" => $request->input("game_name"),
            "price" => $request->input("game_price")
        ];

        return view('game.checkout',["game" => $game, "uang" => $user->money]);
    }

    public function done(Request $request, $id = 1)
    {
        $user_login = $request->session()->get('user-login');
        $user = User::find($user_login->id);
        $game = [
            "name" => $request->input("game_name"),
            "price" => $request->input("game_price")
        ];
        if($game["price"] > $user->money){
            echo "<script>";
            echo "alert('Uang anda tidak mencukupi');";
            echo "</script>";
            return view('game.checkout',["game" => $game, "uang" => $user->money]);
        }else{

            $money = $user->money - $game["price"];
            $user->money = $money;
            $user->save();

            $tags = tag::all();

        $games = Game::where('status', 1)->get();
        $gamesDisplay = Game::where('status', 1)->skip(9 * ($id - 1))->take(9)->get();
        $gamesNew = Game::where('status', 1)->orderBy('release', 'desc')->take(4)->get();

        $totalPage = ceil(count($games) / 9);

        return view('shop.main', [
            'tags' => $tags,
            'games' => $gamesDisplay,
            'totalPage' => $totalPage,
            'current' => $id,
            'new_release' => $gamesNew
        ]);
        }
    }
}
