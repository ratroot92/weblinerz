<?php

namespace App\Http\Controllers;
use App\hr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;

class hr_login_controller extends Controller
{
    public Function login(Request $request){
        $validator = Validator::make($request->all(), [
            'a_email' => 'required',
            'a_password' => 'required',
        ]);

        if ($validator->fails()) {
                return redirect('hr_login')
                            ->withErrors($validator)
                            ->withInput();
            }
$email=$request->input('a_email');
$password=$request->input('a_password');
$check_credentials =DB::table('hrs')->where(['email'=>$email,'password'=>$password])->get();
    if(count($check_credentials)>0){




        return view ('/hr/hr_dashboard')->with('session',$request->session());

}
else{

    return Redirect()->route('hr_login')->with('message','Invalid email and password! ');
     }

   }


   }









   