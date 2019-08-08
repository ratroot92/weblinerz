<?php

namespace App\Http\Controllers;
use App\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;

class employee_login_controller extends Controller
{
    public Function login(Request $request){
        $validator = Validator::make($request->all(), [
            'e_email' => 'required',
            'e_password' => 'required',
        ]);

        if ($validator->fails()) {
                return redirect('employeelogin')
                            ->withErrors($validator)
                            ->withInput();
            }
$email=$request->input('e_email');
$password=$request->input('e_password');
$check_credentials =DB::table('employees')->where(['e_email'=>$email,'e_password'=>$password])->get();
    if(count($check_credentials)>0){




        return view ('/employees/employee_dashboard')->with('session',$request->session());

}
else{

    return Redirect()->route('employeelogin')->with('message','Invalid email and password ');
     }

   }














}
