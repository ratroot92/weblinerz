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
        return view('hr.hr_employees_salaries')->with(compact('salariesName','salariesdata'));
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

}

