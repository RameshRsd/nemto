<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exhibitor extends Model
{
    public function district(){
        return $this->belongsTo(District::class,'district_id');
    }

}
