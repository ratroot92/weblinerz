<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HrEmpolyeeSalaries;
use App\EmployeesSalaryDrafts;
use App\employee;
use DB;

class HrEmployeeSalariesController extends Controller
{
    public function index() {

        $salariesName = HrEmpolyeeSalaries::all();  
        
        $salariesdata = employee::with('employeessalarydrafts')->get();
        //dd($salariesdata);
    	//echo '<pre>'; print_r($salariesdata); echo '</pre>'; die();
        return view('hr.Employees.Salaries.index')->with(compact('salariesName','salariesdata'));
    }

    public function employeeContracts() {
    	return view('hr.hr_employees_contracts');
    }

    public function addEmpolyeesContracts() {
    	
    	return view('hr.hr_employees_add_contracts');
    }

    public function getSalary(Request $request) {
        $name = $request->name;
        $amount = employee::where('id', $name)->pluck('salary');
        return response()->json($amount);
          
    }

    public function addEmployeesSalaries(Request $request) {

        if ($request->isMethod('post')) {
            
            $data = $request->all();
            //echo '<pre>'; print_r($data); echo '</pre>'; die();
            
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
            return response()->json('success');
          
        }
    }

    public function editHrEmployeeSalaries(Request $request, $id) {

        $emp_sal = EmployeesSalaryDrafts::findOrFail($id);
        $salariesName = HrEmpolyeeSalaries::all();
        //$emp_sal = employee::with('employeessalarydrafts')->get();
        //dd($emp_sal);
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo '<pre>'; print_r($data); echo '</pre>'; die();
            EmployeesSalaryDrafts::where(['id' => $id])->update([
                'date'=> $data['date'],
                'fine'=> $data['fine'],
                'total'=> $data['total_sal'],
                'received'=> $data['receive'],
                'pending'=>$data['pending'],
                'comments'=>$data['comments']
            ]);
            return redirect()->back()->with('flash_message_success','Record has been updated sucessfully');
        }
            return view('hr.Employees.Salaries.edit',[
                'emp_sal' => $emp_sal,
                'salariesName' => $salariesName
            ]);
    }

    public function deleteHrEmployeeSalaries($id = null) {
        //echo '<pre>'; print_r('420'); echo '</pre>'; die();
        EmployeesSalaryDrafts::find($id)->delete($id);
        //return response()->json(['Record deleted successfully!']);
        return redirect()->back()->with('flash_message_success','Record has been Deleted sucessfully!');
    }

}

