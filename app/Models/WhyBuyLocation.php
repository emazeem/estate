<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyBuyLocation extends Model
{
    use HasFactory;
    public function location(){
        return $this->belongsTo(Location::class,'location_id','id')->withDefault();
    }
}
