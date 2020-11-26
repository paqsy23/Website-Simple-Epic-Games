<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\tag;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function showGameDetail($id){
        $game = Game::find($id);

        // dd($game->img);
        $gambar = [];
        $index = 0;

        foreach($game->img as $curGambar){
            $gambar[]=(object)[
                'index'=> $index,
                'link'=> $curGambar->link
            ];
            $index= $index+1;
        }
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
