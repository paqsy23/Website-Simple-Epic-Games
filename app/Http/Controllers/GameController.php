<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\library;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GameController extends Controller
{
    public function showGameDetail(Request $request,$id){
        $game = Game::where('id',$id)->where('status',1)->first();
        $user = $request->session()->get('user-login');
        if($user != null){
            $library = library::where('user_id',$user->id)->get();
        }
        else{
            $library = [];
        }


        if($game==null){
            return back();
        }
        $gambar = [];
        $index = 0;

        foreach($game->img as $curGambar){
            if(!Str::contains($curGambar->link,'logo')){
                $gambar[]=(object)[
                    'index'=> $index,
                    'link'=> $curGambar->link
                ];
                $index= $index+1;
            }
        }
        return view('game.game_detail',["game"=>$game,"gambar"=>$gambar,"library"=>$library]);
    }

    //note buat kalau mau insert tag game
    // public function tambahTag()
    // {
    //     $game = Game::find(1);

    //     $game->tags()->attach(4);

    //     dd($game->tags);
    // }
}
