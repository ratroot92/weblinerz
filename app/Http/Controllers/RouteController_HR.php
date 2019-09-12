<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HrEmpolyeeSalaries;
use App\EmployeesSalaryDrafts;
use App\EmployeesDocuments;
use App\EmployeesReports;
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

            $lastempployee = employee::orderBy('created_at', 'desc')->first();
            if ($lastempployee != null) {
                $lastempployee_id              = $lastempployee->id + 1;
            } else {
                $lastempployee_id              = 1;
            }
        return view('hr.Employees.employees_home',compact('lastempployee_id'));
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
        $employeeData = employee::all();
        //echo '<pre>'; print_r($employeeData); echo '</pre>'; die();
        return view('hr.Employees.Complaints.employeeComplaints')->with(compact('employeeData'));
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

public function returnemployeeDocuments(){
    $employeesDocuments = EmployeesDocuments::all();    
    return view('hr.Employees.Documents.index')->with(compact('employeesDocuments'));
}

public function returnemployeeReports(){
    $employeesReports = EmployeesReports::all();    
    return view('hr.Employees.Reports.index')->with(compact('employeesReports'));
}




}
