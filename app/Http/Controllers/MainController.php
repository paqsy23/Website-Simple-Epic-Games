<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showHome(Request $request, $id = 1)
    {
        $tags = tag::all();

        $games = Game::all();
        $gamesDisplay = Game::skip(6 * ($id - 1))->take(6)->get();

        $totalPage = ceil(count($games) / 6);

        return view('shop.main', [
            'tags' => $tags,
            'games' => $gamesDisplay,
            'totalPage' => $totalPage,
            'current' => $id
        ]);
    }
}
