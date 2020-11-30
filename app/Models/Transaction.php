<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table="transaction";
    protected $guarded = ["id"];

    public function games(){
        return $this->hasOne(Game::class,'id','game_id');
    }

    public function users(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
