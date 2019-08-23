<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;


class hr_login_controller extends Controller
{


//hr_login
    public Function loginAdmin(Request $request){
        $validator = Validator::make($request->all(), [
            'a_email' => 'required',
            'a_password' => 'required',
        ]);

        if ($validator->fails()) {
                return redirect('showLoginForm')
                            ->withErrors($validator)
                            ->withInput();
            }
$email=$request->input('a_email');
$password=$request->input('a_password');
if (Admin::where(['email'=>$email,'password'=>$password])->exists()) {
return view('hr.Dashboard.hrDashboard');
}
else{
return Redirect()->route('showLoginForm')->with('message','Invalid email and password! ');
}

   }//end of function login




   }//end of controller









