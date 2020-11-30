<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table="transaction";
    protected $guarded = ["id"];

    public function games()
    {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }
}
