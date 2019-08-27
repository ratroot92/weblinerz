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
        $validator = Validator::make($request->all(), [
            'name' => 'max:25',
            'email' => 'email',
            'description' => 'max:200',
            'start_date' => 'date',
            'end_date' => 'date',
            'id' => 'required|numeric'
        ]);
        if ($validator->passes()) {

$contract=new Contract;
$contract->name=$request->name;
$contract->reference_id=$request->id;
$contract->employee_designation=$request->designation;
$contract->email=$request->email;
$contract->start_date = $request->start_date;
$contract->end_date = $request->end_date;
$contract->description=$request->description;
$contract->save();
$contracts = Contract::all();
return view('hr.Employees.Contracts.allContractTable', compact('contracts'));

        }

        return response()->json(['error' => $validator->errors()->all()]);

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
public function editContractSubmit(Request $request,$id){


        $validator = Validator::make($request->all(), [
            'name' => 'max:25',
            'email' => 'email',
            'description' => 'max:200',
            'start_date' => 'date',
            'end_date' => 'date',
            'contractid'=>'required|numeric'
        ]);
        if ($validator->passes()) {
            $empContract = Contract::findOrFail($id)->first();
            //   $empContract = DB::table('contracts')->where('reference_id', $id)->first();
            $empContract->name = $request->name;
            $empContract->email = $request->email;
            $empContract->description = $request->description;
            $empContract->start_date = $request->start_date;
            $empContract->end_date = $request->end_date;
            $empContract->employee_designation = $request->designation;
            $empContract->save();


            $contracts = Contract::all();
              return view('hr.Employees.Contracts.allContractTable', compact('contracts'));

           
        }

       


        return response()->json(['error' => $validator->errors()->all()]);
    }


public function deleteContract($id){
Contract::findorfail($id)->delete();
        $contracts = Contract::all();
        return view('hr.Employees.Contracts.allContractTable', compact('contracts'));

}






}
