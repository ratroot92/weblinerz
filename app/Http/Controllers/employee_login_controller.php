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
$check_credentials =DB::table('employees')->where(['email'=>$email,'password'=>$password])->get();
    if(count($check_credentials)>0){




        return view ('employees/employee_home_view')->with('session',$request->session());

}
else{

    return Redirect()->route('employeelogin')->with('message','Invalid email and password ');
     }

   }


   public Function add_employee(Request $req){
    $validator = Validator::make($req->all(), [
        'id' =>     'unique:employees,id',
        'email' => 'unique:employees,email',
        'name' => 'unique:employees,name',
        'status'=>'required'
       
    ]);

    if ($validator->fails()) {
            return redirect('employee_dashboard')
                        ->withErrors($validator)
                        ->withInput();
        }
    
$id=$req->input('id');
$name=$req->input('name');
$email=$req->input('email');
$salary=$req->input('password');
$contract_type=$req->get('status');
$start=$req->input('start_date');
$end=$req->input('end_date');
$salary=$req->input('e_salary');


$employee = new employee;
$employee->id = $id;
$employee->name = $name;
$employee->email = $email;
$employee->password = $salary;
$employee->contract = $contract_type;
$employee->start_date = $start;
$employee->end_date = $end;
$employee->salary = $salary;
$check_status=$employee->save();
if($check_status=="true"){

 return Redirect()->route('employee_dashboard')->with('message','Employee Has Been Added Succesfully');
}
else{
    return Redirect()->route('employee_dashboard')->with('message','Failed To Add Employee ! ');


}









   }













}
