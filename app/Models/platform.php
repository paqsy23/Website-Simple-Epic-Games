<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class platform extends Model
{
    protected $table="platform";
    protected $guarded = ["id"];

    public function games()
    {
        return $this->belongsToMany(game::class,'h_platform','platform_id','game_id')->withPivot(['id'])->as("platform_game");
    }
}
