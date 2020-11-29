<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\ResetPassword;
use App\Models\developer;
use App\Models\Game;
use App\Models\h_tag;
use App\Models\Image;
use App\Models\tag;
use App\Rules\CheckGameName;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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
        return redirect('developer/login');
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
        $developer = developer::find(Session::get('developer-login')->id);
        $gameParent = Game::where('developer_id',$developer->id)->orWhere('publisher_id',$developer->id)->get();

        return view('developer.insertGame',['developerList'=>$developerList,'tagList'=>$tagList,'developer'=>$developer,'gameParent'=>$gameParent]);
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
            'add_ons'=>'required_if:mycheckbox,on',
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
        $os = $request->os;
        $cpu = $request->cpu;
        $graphics = $request->graphics;
        $processor = $request->processor;
        $memory = $request->memory;
        $storage = $request->storage;
        $directx = $request->directx;
        $note = $request->note;
        $add_ons = $request->add_ons;

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
            'twitter'=>$twitter,
            'os'=>$os,
            'cpu'=>$cpu,
            'graphics'=>$graphics,
            'processor'=>$processor,
            'memory'=>$memory,
            'storage'=>$storage,
            'direct_x'=>$directx,
            'note'=>$note,
            'add_ons'=>$add_ons
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

    public function reactivate(Request $request,$id)
    {
        $game=Game::find($id);

        $game->status=2;
        $game->save();

        $request->session()->flash('message', 'Waiting for Admin Confirmation :D');

        return back();
    }

    public function deactivate(Request $request,$id)
    {
        $game=Game::find($id);

        $game->status=0;
        $game->save();

        $request->session()->flash('message', 'Game Deactivated :(');

        return back();
    }

    public function showEditProfile($id)
    {
        $developer = developer::find($id);
        return view('developer.editprofile',['developer'=>$developer]);
    }

    public function editProfile(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'oldpassword'=>'required_if:mycheckbox,on',
            'newpassword'=>'required_if:mycheckbox,on'
        ]);

        $developer = developer::where('username',$request->username)->first();

        if($request->oldpassword!=null && password_verify($request->oldpassword, $developer->password)){
            $developer->name=$request->name;
            $developer->password=password_hash($request->newpassword, PASSWORD_BCRYPT);
            $developer->save();
            $request->session()->flash('message', 'Edit Profile Successful :)');
            return back();
        }else if($request->oldpassword==null && $request->name!=$developer->name){
            $developer->name=$request->name;
            $developer->save();
            $request->session()->flash('message', 'Edit Profile Successful :)');
            return back();
        }else if($request->oldpassword!=null){
            $request->session()->flash('message', 'Old Password Did Not Match Record');
            return back();
        }
        $request->session()->flash('message', 'No Data Change :( Why Are You Even Here...');
        return back();
    }

    public function logout()
    {
        Session::forget('developer-login');
        return redirect('developer/login');
    }

    public function resetPassword(Request $request)
    {
        $token = Str::random(60);

        $request->validate([
            'email'=>'required',
            'username'=>'required|exists:developer,username'
        ]);

        $link = "http://127.0.0.1:8000/resetpassword/".$token;

        ResetPassword::create([
            'token'=>$token,
            'email'=>$request->email,
            'username'=>$request->username,
            'link'=>$link,
            'status'=>0
        ]);

        return (new ResetPasswordMail($link))->render();
        // Mail::to($request->email)->send(new ResetPasswordMail($link));

        // $request->session()->flash('message', 'We have send the link to your email');

        // return back();
    }

    public function resetPasswordToken(Request $request,$token)
    {
        $reset = ResetPassword::where('token',$token)->first();

        if($reset!=null && $reset->status==0){
            return view('developer.resetpassword',['reset'=>$reset]);
        }else{
            $request->session()->flash('warning', 'Link Invalid :|');
            return redirect('developer/login');
        }
    }

    public function prosesResetPasswordToken(Request $request)
    {
        $request->validate([
            'password'=>'required',
            'confirmPassword'=>'required|same:password'
        ]);

        $developer = Developer::where('username',$request->username)->first();
        $developer->password = password_hash($request->password, PASSWORD_BCRYPT);
        $developer->save();

        $reset = ResetPassword::where('token',$request->token)->first();
        $reset->status=1;
        $reset->save();

        $request->session()->flash('message', 'Reset Password Done, Go Login Now :D');
        return redirect('developer/login');
    }

    public function showEditGame($id)
    {
        $developer = developer::find(Session::get('developer-login')->id);

        $game = Game::find($id);

        $arr = [];

        foreach($game->tags as $curTag){
           $arr[] = $curTag->id;
        }

        $tagList = tag::all();
        $tagList = $tagList->except($arr);

        $developerList = developer::where('status',1)->get();

        $gameParent = Game::where('developer_id',$developer->id)->orWhere('publisher_id',$developer->id)->get();

        return view('developer.editGame',['game'=>$game,'developer'=>$developer,'tagList'=>$tagList,'developerList'=>$developerList,'gameParent'=>$gameParent]);
    }

    public function editGame(Request $request)
    {
        $game = Game::find($request->id);

        $request->validate([
            'developer' => ['required'],
            'publisher' => ['required'],
            'name' => ['required',new CheckGameName($game->name)],
            'release' => ['required','date'],
            'description' => ['required'],
            'price'=>['required'],
            'tags'=>['required'],
            'gameImage.*' => 'required_if:mycheckbox2,on|mimes:png,jpg,jpeg|max:2048',
            'gameLogo' => 'required_if:mycheckbox,on|mimes:png,jpg,jpeg|max:2048',
            'add_ons'=>'required_if:mycheckbox3,on',
            'instagram'=>'url|nullable',
            'website'=>'url|nullable',
            'reddit'=>'url|nullable',
            'youtube'=>'url|nullable',
            'facebook'=>'url|nullable',
            'twitch'=>'url|nullable',
            'twitter'=>'url|nullable',
        ]);

        $game->update($request->all());
        //edit tanpa ganti gambar
        if($request->mycheckbox==null && $request->mycheckbox2==null){
            $request->session()->flash('message', 'Game Updated!! Waiting for Admin Confirmation');
            return back();
        }else if($request->mycheckbox=="on"){
            //ganti gambar logo game
        }
        dd($request->mycheckbox);
    }
}
