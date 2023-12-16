<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpotlightLocation extends Model
{
    use HasFactory;
    public function location(){
        return $this->belongsTo(Location::class,'location_id','id')->withDefault();
    }
}
