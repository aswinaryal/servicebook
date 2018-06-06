<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected function authenticated(Request $request, $user)
    {
        if(Auth::User()->isAdmin()){
            return redirect('/admin');
        }else{
            return redirect('/');
        }
    }

    public function showLoginForm()
    {
        return view('users.auth.login');
    }



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
//        return $request->only($this->username(), 'password');
        //this allows user to login until their status is equal to 1
        return ['email'=>$request->{$this->username()},'password'=>$request->password,'status'=>'1'];
    }
}
