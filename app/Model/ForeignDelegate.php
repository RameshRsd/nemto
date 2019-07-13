<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ForeignDelegate extends Model
{
    public function district(){
        return $this->belongsTo(District::class,'district_id');
    }
    public function recommended(){
        return $this->belongsTo(Recommended::class,'recommended_id');
    }
    public function occupation(){
        return $this->belongsTo(Occupation::class,'occupation_id');
    }
}
