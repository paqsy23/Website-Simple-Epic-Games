<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\tag;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function showGameDetail($id){
        $game = Game::find($id);

        return view('game.game_detail',["game"=>$game]);
    }

    //note buat kalau mau insert tag game
    // public function tambahTag()
    // {
    //     $game = Game::find(1);

    //     $game->tags()->attach(4);

    //     dd($game->tags);
    // }
}
