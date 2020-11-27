<?php

namespace App\Http\Controllers;

use App\Models\developer;
use App\Models\Game;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        $game = Game::where('status','!=',1)->get();

        return view('admin.home',['game'=>$game]);
    }

    public function report()
    {
        $nilai = 350;

        return view('admin.report',["nilai"=>$nilai]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if($request->username=="admin" && $request->password="admin"){
            return redirect('/admin/home');
        }
    }

    public function developer()
    {
        $developer = developer::where('status',1)->get();

        return view('admin.developer',['developer'=>$developer]);
    }

    public function developerDetail($id)
    {
        $developer = developer::find($id);

        return view('admin.developer_detail',['developer'=>$developer]);
    }
    public function logout()
    {
        return redirect('/admin');
    }
}
