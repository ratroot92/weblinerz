<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrEmployeeSalariesController extends Controller
{
    public function index() {
    	return view('hr.hr_employees_salaries');
    }

    public function employeeContracts() {
    	return view('hr.hr_employees_contracts');
    }

    public function addEmpolyeesContracts() {
    	
    	return view('hr.hr_employees_add_contracts');
    }
}
