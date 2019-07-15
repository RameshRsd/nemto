<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VisaInvitation extends Model
{
    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
    public function place_issue(){
        return $this->belongsTo(Country::class,'place_of_issue');
    }
}
