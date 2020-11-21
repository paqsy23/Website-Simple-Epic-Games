<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function showGameDetail($id){
        $game = Game::find($id);

        return view('game.game_detail',["game"=>$game]);
    }
}
