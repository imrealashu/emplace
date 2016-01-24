<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    public function company(){
        return $this->belongsTo('\App\Models\Company');
    }
    public function feedback(){
        return $this->hasMany('\App\Models\RestaurantFeedback');
    }
    public function users(){
        return $this->hasManyThrough('\App\User','\App\Models\RestaurantFeedback','user_id','id');
    }
}
