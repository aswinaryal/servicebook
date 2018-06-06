<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
    public function property(){
        return $this->hasMany('App\Property');
    }
}
