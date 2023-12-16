<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentialDev extends Model
{
    use HasFactory;
    public function features(){
        return $this->hasMany(ResidentialFeature::class,'residential_id','id');
    }
    public function videos(){
        return $this->hasMany(ResidentialVideo::class,'residential_id','id');
    }

    public function perks(){
        return $this->hasMany(ResidentialPerks::class,'residential_id','id');
    }
    public function images(){
        return $this->hasMany(ResidentialGallery::class,'residential_id','id');
    }


}
