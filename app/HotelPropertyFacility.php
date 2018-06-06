<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelPropertyFacility extends Model
{
    public function hotelProperty(){
        return $this->belongsTo('App\HotelProperty');
    }
}
