<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyFeedback extends Model
{
    public function property(){
        return $this->belongsTo('App\Property');
    }
}
