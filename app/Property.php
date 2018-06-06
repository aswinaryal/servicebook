<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function service(){
        return $this->belongsTo('App\Service');
    }
    public function propertyOwner(){
        return $this->hasOne('App\PropertyOwner');
    }
    public function propertyFeedback(){
        return $this->hasMany('App\PropertyFeedback');
    }
}
