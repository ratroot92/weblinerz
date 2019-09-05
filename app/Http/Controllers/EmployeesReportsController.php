<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\EmployeesReports;
use Validator;

class EmployeesReportsController extends Controller
{
    public function addEmployeesReportsCreate()
	{
	    
	    return view('hr.Employees.Reports.add');
	}

	public function addEmployeesReports(Request $request)
    {

    	if ($request->isMethod('post'))
        {
            
            $data = $request->all();
             
            $reports = new EmployeesReports;
            $reports->name = $data['name'];
            $reports->description = $data['description'];
            $reports->status = $data['status'];

            if($request->hasFile('file'))
		    {
				$file = $request->file->getClientOriginalName();
				$request->file->move(public_path('Employee_Files/Files/Reports/'),$file);        
				$reports->file          = $file;
				$reports->save();
		    }
           
            $reports->save();
           
            // Sending JSON response array
            return response()->json([
                'reports'=> $reports
                ]);
          
        }
    }

    public function editHrEmployeeReports(Request $request, $id)
    {

        $emp_reports = EmployeesReports::findOrFail($id);

        return view('hr.Employees.Reports.edit',[
            'emp_reports' => $emp_reports
        ]);
    }


     public function updateHrEmployeeReports(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required'
       ]);

        if ($validator->passes()) 
        {
			$input = $request->all();
        	
			$reports = EmployeesReports::findOrFail($input['saldraftID']);
			$reports->name = $input['name'];
			$reports->description = $input['description'];
			$reports->status = $input['status'];
				
			if($request->hasFile('file'))
		    {
				$file = $request->file->getClientOriginalName();
				$request->file->move(public_path('Employee_Files/Files/Reports/'),$file);        
				$reports->file          = $file;
				$reports->save();
		    }
           

			$reports->save();
			return response()->json(1);

        }else{
            return response()->json(['error' => $validator->errors()->all()]);
        }

    }

    public function deleteHrEmployeeReports($id = null)
    {
        
        EmployeesReports::find($id)->delete($id);
        return redirect()->back()->with('flash_message_success','Record has been Deleted sucessfully');

    }

}
