<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RestaurantFeedback extends Model
{
    protected $fillable = ['food','ambiance','service'];

    public function scopeAwesomeFood($query,$id){
        return $query->where(['food'=>100, 'branch_id' => $id]);
    }
    public function scopeGoodFood($query,$id){
        return $query->where(['food'=>75, 'branch_id' => $id]);
    }
    public function scopeAverageFood($query,$id){
        return $query->where(['food'=>50, 'branch_id' => $id]);
    }
    public function scopeBadFood($query,$id){
        return $query->where(['food'=>25, 'branch_id' => $id]);
    }

    public function scopeAwesomeService($query,$id){
        return $query->where(['service'=>100, 'branch_id' => $id]);
    }
    public function scopeGoodService($query,$id){
        return $query->where(['service'=>75, 'branch_id' => $id]);
    }
    public function scopeAverageService($query,$id){
        return $query->where(['service'=>50, 'branch_id' => $id]);
    }
    public function scopeBadService($query,$id){
        return $query->where(['service'=>25, 'branch_id' => $id]);
    }

    public function scopeAwesomeAmbiance($query,$id){
        return $query->where(['ambiance'=>100, 'branch_id' => $id]);
    }
    public function scopeGoodAmbiance($query,$id){
        return $query->where(['ambiance'=>75, 'branch_id' => $id]);
    }
    public function scopeAverageAmbiance($query,$id){
        return $query->where(['ambiance'=>50, 'branch_id' => $id]);
    }
    public function scopeBadAmbiance($query,$id){
        return $query->where(['ambiance'=>25, 'branch_id' => $id]);
    }

    public function scopeAverageRating($query, $id){
        return $query->select(DB::raw('AVG (food) as food, AVG (service) as service, AVG (ambiance) as ambiance'))->where('branch_id',$id);
    }

}
