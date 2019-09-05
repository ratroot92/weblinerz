<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\EmployeesDocuments;
use Validator;

class EmployeesDocumentsController extends Controller
{
	public function addEmployeesDocumentsCreate()
	{
	    
	    return view('hr.Employees.Documents.add');
	}

	public function addEmployeesDocuments(Request $request)
    {

    	if ($request->isMethod('post'))
        {
            
            $data = $request->all();
            //echo '<pre>'; print_r($data); echo '</pre>'; die();  
            $documents = new EmployeesDocuments;
            $documents->name = $data['name'];
            $documents->description = $data['description'];
            $documents->status = $data['status'];

            if($request->hasFile('file'))
		    {
				$file = $request->file->getClientOriginalName();
				$request->file->move(public_path('Employee_Files/Files/documents/'),$file);        
				$documents->file          = $file;
				$documents->save();
		    }
           
            $documents->save();
           
            // Sending JSON response array
            return response()->json([
                'documents'=> $documents
                ]);
          
        }
    }

    public function editHrEmployeeDocuments(Request $request, $id)
    {

        $emp_documents = EmployeesDocuments::findOrFail($id);

        return view('hr.Employees.Documents.edit',[
            'emp_documents' => $emp_documents
        ]);
    }

    public function updateHrEmployeeDocuments(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required'
       ]);

        if ($validator->passes()) 
        {
			$input = $request->all();
        	//echo '<pre>'; print_r($input['saldraftID']); echo '</pre>'; die();
			$document = EmployeesDocuments::findOrFail($input['saldraftID']);
			$document->name = $input['name'];
			$document->description = $input['description'];
			$document->status = $input['status'];
				
			if($request->hasFile('file'))
		    {
				$file = $request->file->getClientOriginalName();
				$request->file->move(public_path('Employee_Files/Files/documents/'),$file);        
				$document->file          = $file;
				$document->save();
		    }
           

			$document->save();
			return response()->json(1);

        }else{
            return response()->json(['error' => $validator->errors()->all()]);
        }

    }

    public function deleteHrEmployeeDocuments($id = null)
    {
        
        EmployeesDocuments::find($id)->delete($id);
        return redirect()->back()->with('flash_message_success','Record has been Deleted sucessfully');

    }
}
