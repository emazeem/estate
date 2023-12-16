<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentialVideo extends Model
{
    use HasFactory;
    public function residential(){
        return $this->belongsTo(ResidentialDev::class,'residential_id','id')->withDefault();
    }
}
