<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    protected $table="resetpassword";
    public $incrementing = true;
    public $timestamps = false;
    protected $guarded = ["id"];
}
