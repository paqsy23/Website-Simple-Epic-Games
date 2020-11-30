<?php

namespace App\Rules;

use App\Models\Game;
use Illuminate\Contracts\Validation\Rule;

class CheckGameName implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name=$name;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $temp = Game::where('name',$value)->first();

        if($temp!=null && $value==$this->name){
            return true;
        }else if($temp==null){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Game Name Already Been Used';
    }
}
