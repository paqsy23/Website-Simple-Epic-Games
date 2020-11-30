<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table="users";
    protected $guarded = ["id"];

    public function games()
    {
        return $this->belongsToMany(Game::class,'library','game_id','user_id')->withPivot(['id'])->as("user_library");
    }

}
