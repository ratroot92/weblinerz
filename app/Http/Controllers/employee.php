<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employeemodel;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;
use DB;

class employee extends Controller
{
     public Function Add_Employee(Request $request){

   	 $validator = Validator::make($request->all(), [
            'employee_name' => 'required|max:15|min:6|unique:employee,e_name',
            'employee_email' => 'required|max:30|min:8|unique:employee,e_email',
            'employee_phone' => 'required|max:11|min:11|unique:employee,e_mobile',
             'employee_password' => 'required|max:14|min:8',
              'employee_c_password' => 'same:employee_password'



        ]);

        if ($validator->fails()) {
                return redirect('employees/employee')
                            ->withErrors($validator)
                            ->withInput();
            }



$name=$request->input('employee_name');
$email=$request->input('employee_email');
$designation=$request->input('employee_designation');
$mobile=$request->input('employee_phone');
$status=$request->input('employee_status');
$password=$request->input('employee_password');

$employee =new employeemodel;
$employee->e_name=$name;
$employee->e_email=$email;
$employee->e_password=$password;
$employee->e_designation=$designation;
$employee->e_status=$status;
$employee->e_mobile=$mobile;
$employee->save();
return redirect()->route("employees/employee")->with('message','Succesfully You Have Been Registered');





   }


public Function Authenticate_employee_login (Request $request){

$validator = Validator::make($request->all(), [
            'e_name' => 'required',
            'e_password'=>'required'
        ]);

        if ($validator->fails()) {
                return redirect('employees/employee_home_view')
                            ->withErrors($validator)
                            ->withInput();
            }

$name=$request->input('e_name');
$password=$request->input('e_password');

$checklogin=DB::table('employee')->where(['e_name'=>$name,'e_password'=>$password])->get();
    if(count($checklogin)>0){

$credentials = DB::table('employee')->where('e_name', $name)->first();
$session_id=$credentials->e_id;
$session_name=$credentials->e_name;
$session_email=$credentials->e_email;
$session_mobile=$credentials->e_mobile;
$session_password=$credentials->e_password;
session(['e_id' => $session_id]);
session(['e_name' => $session_name]);
session(['e_email' => $session_email]);
session(['e_mobile' => $session_mobile]);
session(['e_password' => $session_password]);

        return view ('employees/employee_dashboard')->with('session',$request->session());

}
else{
    return redirect()->route("employees/semployee_home_view")->with('message','failed to login ! try again');
     }
    }







public Function Authenticate_employee_login_by_email (Request $request){

    $validator = Validator::make($request->all(), [
                'e_email' => 'required',
                'e_password1'=>'required'
            ]);

            if ($validator->fails()) {
                    return redirect('employee_home_view')
                                ->withErrors($validator)
                                ->withInput();
                }

    $email=$request->input('e_email');
    $password=$request->input('e_password1');

    $checklogin=DB::table('employee')->where(['e_email'=>$email,'e_password'=>$password])->get();
        if(count($checklogin)>0){

    $credentials = DB::table('employee')->where('e_email', $email)->first();
    $session_id=$credentials->e_id;
    $session_name=$credentials->e_name;
    $session_email=$credentials->e_email;
    $session_mobile=$credentials->e_mobile;
    $session_password=$credentials->e_password;
    session(['e_id' => $session_id]);
    session(['e_name' => $session_name]);
    session(['e_email' => $session_email]);
    session(['e_mobile' => $session_mobile]);
    session(['e_password' => $session_password]);

            return view ('employee_dashboard')->with('session',$request->session());

    }
    else{
        return redirect()->route("employee_home_view")->with('message','failed to login ! try again');
         }
        }

    }


















