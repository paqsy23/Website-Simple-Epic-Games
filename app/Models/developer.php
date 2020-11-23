<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class developer extends Model
{
    protected $table="developer";
    protected $guarded = ["id"];

    public function gameDeveloper()
    {
        return $this->hasMany(game::class,'developer_id','id');
    }

    public function gamePublisher()
    {
        return $this->hasMany(game::class,'publisher_id','id');
    }
}
