<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function state(){
        return $this->belongsTo(State::class,'state_id');
    }
}
