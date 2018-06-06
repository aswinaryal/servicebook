<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
//    public function index(){
//        return view('services.register');
//    }
    public function service_inlist(){
        return view('services.serviceregister');
    }
}
