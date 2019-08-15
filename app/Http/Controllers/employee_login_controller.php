<?php

namespace App\Http\Controllers;
use App\employee;
use App\EmployeeUpload;
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
return redirect('employee_login')
->withErrors($validator)
->withInput();
}
$email=$request->input('e_email');
$password=$request->input('e_password');
$check_credentials =DB::table('employees')->where(['email'=>$email,'password'=>$password])->get();
if(count($check_credentials)>0){
$employees = DB::select('select * from employees');
return view('/employees/employee_dashboard',compact('employees'));
}
else{
return Redirect()->route('employee_login')->with('message','Invalid Email and Password ');
}
}
   
   
   
   
public Function login_by_name(Request $request){
$validator = Validator::make($request->all(), [
'e_name' => 'required',
'e_password1' => 'required',
]);

if ($validator->fails()) {
return redirect('employee_login')
->withErrors($validator)
->withInput();
            }
$name=$request->input('e_name');
$password=$request->input('e_password1');
$check_credentials =DB::table('employees')->where(['name'=>$name,'password'=>$password])->get();
    
if(count($check_credentials)>0){



$employees = DB::select('select * from employees');
return view('/employees/employee_dashboard',compact('employees'));
}
else{

    return Redirect()->route('employee_login')->with('message','Invalid Name and Password ');
     }

   }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   


   public Function add_employee(Request $request){
    $validator = Validator::make($request->all(), [
       'id' =>   'unique:employees,id',
     'email' => 'unique:employees,email',
       // 'uploads'=>'required|mimes:jpeg,png,jpg,gif,docx,pdf,svg',
        'status'=>'required'
		
	
       
    ]);

    if ($validator->fails()) {
            return redirect('employee_dashboard')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		if($request->hasFile('uploads') ){
		 $files = $request->file('uploads');
			foreach($request->uploads as $file){
				$extension=$file->getClientOriginalExtension ();
				
				 $filename=time()."_.".$extension;
        $file->move(public_path('Employee_Files/Files'),$filename);
				
			 
			$upload=new EmployeeUpload;
			$upload->employee_id=$request->id;
			$upload->file_name=$filename;
			$upload->file_path=$file;
			$upload->save();
			}
			
			
$employee = new employee;
$employee->id = $request->id;
$employee->name = $request->name;
$employee->email = $request->email;
$employee->password = $request->password;
$employee->contract = $request->get('status');
$employee->mobile = $request->mobile;
$employee->salary = $request->salary;
$employee->start_date = $request->start_date;
$employee->end_date = $request->end_date;
$check=$employee->save();
if($check){
 return redirect()->route("employee_dashboard")->with('message','Succcessfully Saved Data in Database');
}
else{
	return redirect()->route("employee_dashboard")->with('message','Failed to Save Data');
}


		
			
		}//end of  if request has uploads 
else{

$employee = new employee;
$employee->id = $request->id;
$employee->name = $request->name;
$employee->email = $request->email;
$employee->password = $request->password;
$employee->contract = $request->get('status');
$employee->mobile = $request->mobile;
$employee->salary = $request->salary;
$employee->start_date = $request->start_date;
$employee->end_date = $request->end_date;
$check=$employee->save();
if($check){
 return redirect()->route("employee_dashboard")->with('message','Succcessfully Saved Data in Database');
 return response()->json(['success'=>'You have successfully upload file.']);
}
else{
	return redirect()->route("employee_dashboard")->with('message','Failed to Save Data');
}


}	
		












}//end of add employee function 




public function add_employee_test(Request $request){


 

        $form = EmployeeUpload::create($request->all());

        if ($request->hasFile('uploads')) {
            $files = $request->file('uploads');
            foreach ($files as $file) {
                $fl = $file->store('public/storage/formfiles');
                employee::create([
                   'freelancer_id' => $form->id,
                    'files' => $fl
                ]);
            }
        }

        if ($validation->passes()) {
            return response()->json(['success' => 'Мы скоро свяжемся с вами :)']);
        }


}
}//end of controoler 
