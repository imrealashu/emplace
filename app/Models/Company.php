<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function branches(){
        return $this->hasMany('\App\Models\Branch');
    }
    public function feedbacks(){
        return $this->hasManyThrough('\App\Models\RestaurantFeedback','\App\Models\Branch');
    }
}
