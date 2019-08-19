<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HrEmpolyeeSalaries;
use App\employee;
use DB;

class HrEmployeeSalariesController extends Controller
{
    public function index() {
        $salariesName = HrEmpolyeeSalaries::all();
        //dd($salaries_name);
        //echo '<pre>'; print_r($salariesName); echo '</pre>'; die();
    	return view('hr.hr_employees_salaries')->with(compact('salariesName'));
    }

    public function employeeContracts() {
    	return view('hr.hr_employees_contracts');
    }

    public function addEmpolyeesContracts() {
    	
    	return view('hr.hr_employees_add_contracts');
    }

    public Function getSalary(Request $request) {
        $name = $request->name;
        $amount = employee::where('name', $name)->pluck('salary');
        return response()->json($amount);
          
    }
}

