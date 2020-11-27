<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GameController extends Controller
{
    public function showGameDetail($id){
        $game = Game::where('id',$id)->where('status',1)->first();

        if($game==null){
            return back();
        }
        // dd($game->img);
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

        // dd($gambar);
        return view('game.game_detail',["game"=>$game,"gambar"=>$gambar]);
    }

    //note buat kalau mau insert tag game
    // public function tambahTag()
    // {
    //     $game = Game::find(1);

    //     $game->tags()->attach(4);

    //     dd($game->tags);
    // }
}
