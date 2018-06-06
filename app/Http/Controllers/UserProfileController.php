<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        if(!Gate::allows('isUser')){
            abort(404,'You cannot do this action');
        }
        return view('users.profile');
    }
}
