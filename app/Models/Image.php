<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table="image";
    protected $fillable = ["game_id","link"];
    public $timestamps = false;
}
