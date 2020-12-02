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

    public function search(Request $request)
    {
        $games = Game::where('status', 1)->where('name', 'like', '%'.$request->name.'%')->get();

        return view('shop.search', [
            'keyword' => $request->name,
            'games' => $games
        ]);
    }
}
