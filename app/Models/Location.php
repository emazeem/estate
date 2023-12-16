<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public function whyinvests(){
        return $this->hasMany(WhyBuyLocation::class,'location_id','id');
    }
}
