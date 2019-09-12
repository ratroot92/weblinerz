<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeesComplaints;
use App\employee;

class EmployeesComplaintsController extends Controller
{
    public function complaintsData(Request $request)
    {
        $id = $request->id;         
        $dataQuery = EmployeesComplaints::where('id', $id)->get();

        return response()->json($dataQuery);
      
          
    }

    
}
