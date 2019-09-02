<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HrEmpolyeeSalaries;
use App\EmployeesSalaryDrafts;
use App\employee;
use DB;

class RouteController_HR extends Controller
{


    public function returnHrDashboard(){
        return view('hr.Dashboard.hrDashboard');
}

public function returnHrMaster(){
        return view ('hr.hrMaster');
}

public function returnHrEmplyoyee(){
        return view('hr.Employees.employees_home');
}


public function returnHrEmplyoyeeContract(){
        return view('hr.Employees.Contracts.employeeContracts');
}

public function returnHrEmployeeSalaries(){
	$salariesName = HrEmpolyeeSalaries::all();
	$salariesdata = employee::with('employeessalarydrafts')->get();
	return view ('hr.Employees.Salaries.employeeSalaries')->with(compact('salariesName','salariesdata'));
}

public function returnHrEmployeeComplaints(){
        return view('hr.Employees.Complaints.employeeComplaints');
}


public function returnHrEmployeeAttendence(){
        return view('hr.Employees.Attendence.employeeAttendence');
    }


public function returnemployeeMaster(){
    return view('employees.employeeMaster');
}

public function returnemployeeDashboard(){
    return view('employees.employeedashboard.employeeMaster');
}



public function returnclocklogin(){
    return view('employees.clockin.clock_login');
}


public function returnclocksignup(){
    return view('employees.clockin.signup');
}




}
