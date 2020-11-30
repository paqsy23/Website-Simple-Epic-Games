<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table="games";
    protected $guarded = ["id"];

    public function developer(){
        return $this->hasOne(developer::class,'id','developer_id');
    }

    public function publisher(){
        return $this->hasOne(developer::class,'id','publisher_id');
    }

    public function tags(){
        return $this->belongsToMany(tag::class,'h_tag','game_id','tag_id')->withPivot(['id'])->as("game_tag");
    }

    public function img(){
        return $this->hasMany(Image::class,'game_id','id');
    }

    public function platforms(){
        return $this->belongsToMany(platform::class,'h_platform','game_id','platform_id')->withPivot(['id'])->as("game_platform");
    }

    public function transactions(){
        return $this->belongsToMany(Transaction::class,'transaction','game_id','id')->withPivot(['id'])->as("transaction_id");
    }
}
