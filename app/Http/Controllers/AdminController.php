<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class AdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('admin');
    }

    public function index(){
        return view('administration.home');
    }
    public function profile(){
        return view('administration.profile');
    }
    public function users(){
        $valid_users = DB::table('users')->where('status', '1')->get();
        return view('administration.users')->with('users',$valid_users);
    }
    public function invalidusers(){
        $invalid_users = DB::table('users')->where('status', '0')->get();
        return view('administration.invalidusers')->with('invalidusers',$invalid_users);
    }
}
