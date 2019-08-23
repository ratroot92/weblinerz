<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view ('hr.Employees.Salaries.employeeSalaries');
}

public function returnHrEmployeeComplaints(){
        return view('hr.Employees.Complaints.employeeComplaints');
}


public function returnHrEmployeeAttendence(){
        return view('hr.Employees.Complaints.employeeComplaints');
    }
}
