<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SbServiceProvider extends Model
{
    protected $fillable = [
        'first_name','last_name','email','password','verifytoken',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
