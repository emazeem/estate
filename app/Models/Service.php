<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function sliders(){
        return $this->hasMany(ServiceSlider::class,'service_id','id');
    }
}
