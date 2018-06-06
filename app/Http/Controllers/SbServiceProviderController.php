<?php

namespace App\Http\Controllers;

use App\SbServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\VerifyEmailSP;
use Session;
use Illuminate\Support\Facades\Input;
use Response;





class SbServiceProviderController extends Controller
{

    public function register(Request $request){
        if($request->ajax()){

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'email' => 'required|string|email|max:255|unique:users|unique:sb_service_providers',
            'phone_number' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);


            if ($validator->passes()) {


                return response()->json(['success'=>'Added new records.']);
            }


            return response()->json(['error'=>$validator->errors()->all()]);
//           return $this->validator($request->all())->validate();
//            Session::flash('status','We have sent you a verification email, Please verify It before login');
//            $user =  SbServiceProvider::create([
//
//                'first_name' => $request['first_name'],
//                'last_name' => $request['last_name'],
//                'phone_number' => $request['phone_number'],
//                'email' => $request['email'],
//                'password' => Hash::make($request['password']),
//                'verifytoken'=> Str::random(40),
//
//            ]);
//            $thisUser = SbServiceProvider::findOrFail($user->id);
//            $this->sendEmail($thisUser);
//
////        return redirect(route('login'));
//            return response()->json(1);
        }

    }

    public function sendEmail($thisUser){
        Mail::to($thisUser['email'])->send(new VerifyEmailSP($thisUser));
    }

    public function sendEmailDone($email,$verifytoken){
        $user = SbServiceProvider::where(['email'=>$email,'verifytoken'=>$verifytoken])->first();
        if($user){
            SbServiceProvider::where(['email'=>$email,'verifytoken'=>$verifytoken])->update(['status'=>'1','verifytoken'=>NULL]);
            return redirect(route('confirmation'));
        }else{
            return 'User Not Found';
        }
    }
    public function confirmation(){
        return view('users.auth.confirmation');
    }

    public function loginview(){
        return view('services.login');
    }



}
