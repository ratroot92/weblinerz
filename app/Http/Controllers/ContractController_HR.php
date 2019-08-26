<?php

namespace App\Http\Controllers;
use App\employee;
use DB;
use Illuminate\Http\Request;
use App\Contract;
use Validator;

class ContractController_HR extends Controller
{
    public function returnAddContractView(){
        $employees=employee::all();
        return view('hr.Employees.Contracts.addContractView',compact('employees'));
    }



//display employee crednmtials on add contract form
public function getCredentialsByName($name){
//$credentials=employee::findOrFail($name)->first()->get();
//employee::where('name'=>$name);
////return response()->json(["item_id" => $request->item_id]);
 $user = DB::table('employees')->where('name', $name)->first();
return response()->json($user);
}

//inserting contract in database

public function insertContract(Request $request){


$contract=new Contract;
$contract->name=$request->name;
$contract->reference_id=$request->id;
$contract->employee_designation=$request->designation;
$contract->email=$request->email;
$contract->description=$request->description;
$contract->save();





}

//rendering allcontracts table to contract page
public function allContractsTable(){
$contracts=Contract::all();

return view ('hr.Employees.Contracts.allContractTable',compact('contracts'));
}


//open edit contract model with data
public function editContractView($id){

    $contract=Contract::findOrFail($id);
return view('hr.Employees.Contracts.editContract',compact('contract'));
}

//submit eddited contract
public function editContract(Request $request){
   $id= $request->id;
// //$empContract=Contract::findOrFail($request->id)->get();
//         $empContract = DB::table('contracts')->where('reference_id', $id)->first();
// $empContract->name=$request->name;
// $empContract->email = $request->email;
// $empContract->description = $request->description;
// $empContract->employee_designation = $request->designation;
// $empContract->save();

        $id = $request->input('id');
        $empContract = Contract::findOrFail($id);
        $user = DB::table('contracts')->where('reference_id', $id)->first();
        $empContract->email = $request->input('email');
        $empContract->name = $request->input('name');
        $empContract->description = $request->input('description');
        $empContract->employee_designation = $request->input('employee_designation');

        $empContract->save();


        $contract=Contract::all();
return view('hr.Employees.Contracts.allContractTable',compact('contract'));

}


}
