<?php

namespace App\Http\Controllers;
use App\employee;
use App\EmployeeUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Datatables;
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




public function add_employee_ajax(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'min:5|max:25|',
            'email' => 'email|unique:employees|email',
            'password' => 'min:8|max:14',
            'status' => 'alpha',
            'start_date' => 'date',
            'end_date' => 'date',
            'e_salary'=>'numeric|min:0|max:100000'
        ]);
        if ($validator->passes()) {


            $lastempployee = employee::orderBy('created_at', 'desc')->first();
            if ($lastempployee != null) {
                $lastempployee_id              = $lastempployee->id + 1;
            } else {
                $lastempployee_id              = 1;
            }




            $input = $request->all();

            if ($request->hasFile('uploads')) {
                foreach ($request->uploads as $upload) {
                    $extension = $upload->getClientOriginalExtension();
                    $filename = time() . "_." . $extension;
                    //$filename = $upload->getClientOriginalName();
                    $path = $upload->move(public_path('Employee_Files/Files'), $filename);

                    $upload1 = new EmployeeUpload;
                    $upload1->employee_id = $request->id;
                    $upload1->file_name = $filename;
                    $upload1->file_path = $path;
                    $upload1->save();
                }
            }
            $employee = new employee();
            $employee->id                     = $lastempployee_id;
            $employee->name                     = $input['name'];
            $employee->email                   = $input['email'];
            $employee->password                 = $input['password'];
            $employee->contract =                 $request->get('status');
            $employee->start_date                 = $input['start_date'];
            $employee->end_date               = $input['end_date'];
            $employee->salary               = $input['e_salary'];
            $employee->save();

            return response()->json($employee);
        }
        return response()->json(['error' => $validator->errors()->all()]);




}//end of add_employee_ajax





public Function employee_table_view(){
	$employees=employee::all();
	return view('employees/employees_table',compact('employees'));
}

public Function employee_table_edit($id){
$employee=employee::findOrFail($id);
	return view('employees/employee_table/employee_table_edit',compact('employee'));
}



public Function employee_table_delete($id){
employee::findOrFail($id)->delete();
$employees=employee::all();
return view('employees/employees_table',compact('employees'));
}

public Function edit_employee_ajax(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'min:5|max:25|',
            'email' => 'email',
            'password' => 'min:8|max:14',
            'status' => 'alpha',
            'start_date' => 'date',
            'end_date' => 'date',
            'e_salary' => 'numeric|min:0|max:100000'
        ]);
        if ($validator->passes()) {


            $id = $request->input('id');
            $edit_employee = employee::findOrFail($id);
            $edit_employee->name = $request->input('name');
            $edit_employee->email = $request->input('email');
            $edit_employee->password = $request->input('password');
            $edit_employee->salary = $request->input('e_salary');
            $edit_employee->contract = $request->get('status');
            $edit_employee->start_date = $request->input('start_date');
            $edit_employee->end_date = $request->input('end_date');
            $edit_employee->save();


          
            return response()->json(['sucess' => 'Successfully Eddited the Employee ']);
        }else{
            return response()->json(['error' => $validator->errors()->all()]);
        }

        


        }


}//end of controoler
