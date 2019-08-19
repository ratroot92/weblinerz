<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HrEmpolyeeSalaries;

class HrEmployeeSalariesController extends Controller
{
    public function index() {
        $salariesName = HrEmpolyeeSalaries::all('name');
        //dd($salaries_name);
        //echo '<pre>'; print_r($salaries_name); echo '</pre>'; die();
    	return view('hr.hr_employees_salaries')->with(compact('salariesName'));
    }

    public function employeeContracts() {
    	return view('hr.hr_employees_contracts');
    }

    public function addEmpolyeesContracts() {
    	
    	return view('hr.hr_employees_add_contracts');
    }
}
