<?php

namespace App\Http\Controllers\Auth;

use App\Mail\VerifyEmail;
use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;


    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('users.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:25',
            'lastname' => 'required|string|max:25',
            'currentcountry' => 'required|string|max:50',
            'currentcity' => 'required|string|max:50',
            'origindistrict' => 'required|string|max:25',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        Session::flash('status','We have sent you a verification email, Please verify It before login');
        $user =  User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'currentcountry' => $data['currentcountry'],
            'currentcity' => $data['currentcity'],
            'origindistrict' => $data['origindistrict'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'verifytoken'=> Str::random(40),
        ]);
        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);

        return $user;
    }

    public function sendEmail($thisUser){
        Mail::to($thisUser['email'])->send(new VerifyEmail($thisUser));
    }



    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        return redirect(route('login'));
    }

    public function sendEmailDone($email,$verifytoken){
        $user = User::where(['email'=>$email,'verifytoken'=>$verifytoken])->first();
        if($user){
             user::where(['email'=>$email,'verifytoken'=>$verifytoken])->update(['status'=>'1','verifytoken'=>NULL]);
             return redirect(route('confirmation'));
        }else{
             return 'User Not Found';
        }
    }

    public function confirmation(){
        return view('users.auth.confirmation');
    }



}
