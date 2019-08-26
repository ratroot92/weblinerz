<?php

namespace App\Http\Controllers;
use App\employee;
use DB;
use Illuminate\Http\Request;

class ContractController_HR extends Controller
{
    public function returnAddContractView(){
        $employees=employee::all();
        return view('hr.Employees.Contracts.addContractView',compact('employees'));
    }


    public function getCredentialsByName($name){
//$credentials=employee::findOrFail($name)->first()->get();
//employee::where('name'=>$name);
////return response()->json(["item_id" => $request->item_id]);
 $user = DB::table('employees')->where('name', $name)->first();
return response()->json($user);
}



}
