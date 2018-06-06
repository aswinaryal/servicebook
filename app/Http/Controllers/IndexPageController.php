<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
class IndexPageController extends Controller
{
    public function index(){
        if(Gate::allows('isAdmin')){
            abort(404,'Sorry, You cannot do this action');
        }
        return view('welcome');
    }
}
