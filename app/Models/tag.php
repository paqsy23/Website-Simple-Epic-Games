<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table="tag";
    protected $guarded = ["id"];

    public function games()
    {
        return $this->belongsToMany(game::class,'h_tag','tag_id','game_id')->withPivot(['id'])->as("tag_game");
    }
}
