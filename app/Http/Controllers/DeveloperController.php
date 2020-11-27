<?php

namespace App\Http\Controllers;

use App\Models\developer;
use App\Models\Game;
use App\Models\h_tag;
use App\Models\Image;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class DeveloperController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $developer = developer::where('username',$request->username)->first();

        if ($developer != null) {
            if (password_verify($request->password, $developer->password)) {
                $request->session()->put('developer-login', $developer);
                return redirect('developer/home');
            } else {
                $request->session()->flash('warning', 'Wrong Password');
            }
        } else {
            $request->session()->flash('warning', 'Username / Email not found!');
        }
        return redirect('developer/');
    }

    public function home()
    {
        $developer = developer::find(Session::get('developer-login')->id);
        return view('developer.home',['developer'=>$developer]);
    }

    public function gameList()
    {
        $developer = developer::find(Session::get('developer-login')->id);

        return view('developer.gamelist',['developer'=>$developer]);
    }

    public function newGame()
    {
        $developerList = developer::where('status',1)->get();
        $tagList = tag::all();

        return view('developer.insertGame',['developerList'=>$developerList,'tagList'=>$tagList]);
    }

    public function insertGame(Request $request)
    {
        $request->validate([
            'developer' => ['required'],
            'publisher' => ['required'],
            'name' => ['required','unique:App\Models\Game,name'],
            'release' => ['required','date'],
            'description' => ['required'],
            'price'=>['required'],
            'tags'=>['required'],
            'gameImage.*' => 'required|mimes:png,jpg,jpeg|max:2048',
            'gameLogo' => 'required|mimes:png,jpg,jpeg|max:2048',
            'instagram'=>'url|nullable',
            'website'=>'url|nullable',
            'reddit'=>'url|nullable',
            'youtube'=>'url|nullable',
            'facebook'=>'url|nullable',
            'twitch'=>'url|nullable',
            'twitter'=>'url|nullable',
        ]);

        $instagram = $request->instagram;
        $website = $request->website;
        $reddit = $request->reddit;
        $youtube = $request->youtube;
        $facebook = $request->facebook;
        $twitch = $request->twitch;
        $twitter = $request->twitter;

        $gameId = Game::insertGetId([
            'developer_id' => $request->developer,
            'publisher_id' => $request->publisher,
            'name' => $request->name,
            'release' => Carbon::parse($request->release),
            'description'=> $request->description,
            'price'=>$request->price,
            'status'=>0,
            'instagram'=>$instagram,
            'website'=>$website,
            'reddit'=>$reddit,
            'youtube'=>$youtube,
            'facebook'=>$facebook,
            'twitch'=>$twitch,
            'twitter'=>$twitter
        ]);

        foreach($request->tags as $curTag){
            h_tag::create([
                'tag_id'=>$curTag,
                'game_id'=>$gameId
            ]);
        }

        $namaPhoto = "logo.".$request->file('gameLogo')->extension();
        $namaFolderPhoto = "games/".$gameId;
        $pathPhoto = $request->gameLogo->storeAs($namaFolderPhoto,$namaPhoto,"public");

        Image::create([
            'game_id'=>$gameId,
            'link'=>$gameId."/".$namaPhoto
        ]);

        $index = 1;
        foreach($request->file('gameImage') as $photo){
            $namaPhoto = $index.".".$photo->extension();
            $namaFolderPhoto = "games/".$gameId;
            $pathPhoto = $photo->storeAs($namaFolderPhoto,$namaPhoto,"public");
            $index = $index+1;
            Image::create([
                'game_id'=>$gameId,
                'link'=>$gameId."/".$namaPhoto
            ]);
        }

        $request->session()->flash('message', 'Game Registered!! Waiting for Admin Confirmation');

        return back();
    }

    public function logout()
    {
        Session::forget('developer-login');
        return redirect('developer/');
    }
}
