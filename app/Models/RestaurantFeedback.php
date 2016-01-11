<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RestaurantFeedback extends Model
{
    protected $fillable = ['food','ambiance','service'];
}
