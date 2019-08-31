<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HrEmpolyeeSalaries;
use App\EmployeesSalaryDrafts;
use App\employee;
use DB;
use Validator;

class HrEmployeeSalariesController extends Controller
{
    public function index()
    {

        $salariesName = HrEmpolyeeSalaries::all();
        $salariesdata = employee::with('employeessalarydrafts')->get();
        //dd($salariesdata);
    	//echo '<pre>'; print_r($salariesdata); echo '</pre>'; die();
        return view('hr.Employees.Salaries.index')->with(compact('salariesName','salariesdata'));
    }

    public function getSalary(Request $request)
    {
        $name = $request->name;
        $amount = employee::where('id', $name)->pluck('salary');
        return response()->json($amount);
          
    }

    public function addEmployeesSalariesCreate()
    {
        $salariesName = HrEmpolyeeSalaries::all();
        return view('hr.Employees.Salaries.add')->with(compact('salariesName'));
    }

    public function addEmployeesSalaries(Request $request)
    {

        if ($request->isMethod('post'))
        {
            
            $data = $request->all();
            //echo '<pre>'; print_r($data); echo '</pre>'; die();
            
            $employee_data = employee::find($data['emp_id']);
            $employee_name = $employee_data->name;
            $employee_salary = $employee_data->salary;

            $employee = new EmployeesSalaryDrafts;
            $employee->employee_id = $data['emp_id'];
            $employee->date = $data['date'];
            $employee->fine = $data['fine'];
            $employee->total = $data['total_sal'];
            $employee->received = $data['receive'];
            $employee->pending = $data['pending'];
            $employee->comments = $data['comments'];
            $employee->status = 'active';
            $employee->save();

           
            // Sending JSON response array
            return response()->json([
                'employee'=> $employee,
                'employee_name'=> $employee_name,     
                'employee_salary'=> $employee_salary
                ]);
          
        }
    }

    public function editHrEmployeeSalaries(Request $request, $id)
    {

        $emp_sal = EmployeesSalaryDrafts::findOrFail($id);
        $employeesName = HrEmpolyeeSalaries::all();
        //$emp_sal = employee::with('employeessalarydrafts')->get();
        //dd($emp_sal);

        return view('hr.Employees.Salaries.edit',[
            'emp_sal' => $emp_sal,
            'employeesName' => $employeesName
        ]);
    }
    public function updateHrEmployeeSalaries(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'fine' => 'required|numeric',
            'total_sal' => 'required|numeric',
            'receive' => 'required|numeric',
            'pending' => 'required|numeric',
            'comments' => 'required'
       ]);
        if ($validator->passes()) {
            $input = $request->all();
            $saldraft = EmployeesSalaryDrafts::findOrFail($input['saldraftID']);
            $saldraft->date = $input['date'];
            $saldraft->fine = $input['fine'];
            $saldraft->total = $input['total_sal'];
            $saldraft->received = $input['receive'];
            $saldraft->pending = $input['pending'];
            $saldraft->comments = $input['comments'];
            $saldraft->save();
            return response()->json(1);
        }
        else{
            return response()->json(['error' => $validator->errors()->all()]);
        }

    }

    public function deleteHrEmployeeSalaries($id = null)
    {
        //echo '<pre>'; print_r('420'); echo '</pre>'; die();
        EmployeesSalaryDrafts::find($id)->delete($id);
        return redirect()->back()->with('flash_message_success','Record has been Deleted sucessfully');

    }

    public function getMonth(Request $request)
    {
        $date = $request->date;
        // $monthsQuery = DB::table('employees_salary_drafts')
        //             ->whereMonth('date',  $date)
        //             ->get();
        $monthsQuery = EmployeesSalaryDrafts::whereMonth('date',  $date)
                    ->with('employee')
                    ->get();

        //$salariesName = HrEmpolyeeSalaries::all('name','salary');
        //dd($monthsQuery);
        return response()->json($monthsQuery);
      
          
    }

}

