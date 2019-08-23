
<form action="{{ url('/hr/hr_employee_salaries/update_employeesalary/') }}" name="editEmployeesSalaries" method="post" id="editEmployeesSalaries" class="form-container formdata editform">
    @csrf
    <div class="form-group">
        <input type="hidden" name="saldraftID" value="{{$emp_sal->id}}">
        <label for="date">Date</label>
        <input type="text" value="{{$emp_sal->date}}" class="form-control pull-right" id="date" name="date" placeholder="Date">
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <select class="form-control" id="name" name="emp_id">
            <option>Please Select</option>
            @foreach($employeesName as $employees)
                <option id="name" name="name"
                        @if ($employees->id == $emp_sal->employee->id)
                        {{'selected="selected"'}}
                        @endif
                        value="{{$employees->id}}">{{ $employees->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="salary">Salary</label>
        <input type="text" value="{{$emp_sal->employee->salary}}" id="salary" class="salary" placeholder="Salary" name="salary" >
    </div>
    <div class="form-group">
        <label for="fine">Fine</label>
        <input type="text" value="{{$emp_sal->fine}}" id="fine" name="fine" placeholder="Fine" >
    </div>
    <div class="form-group">
        <label for="total">Total</label>
        <input type="text" value="{{$emp_sal->total}}" id="total_sal"  name="total_sal" placeholder="Total Salary" >
    </div>
    <div class="form-group">
        <label for="receive">Received</label>
        <input type="text" value="{{$emp_sal->received}}" id="receive" name="receive" placeholder="Received">
    </div>
    <div class="form-group">
        <label for="pending">Pending</label>
        <input type="text" value="{{$emp_sal->pending}}" id="pending" name="pending" value="" placeholder="Pending" name="pending">
    </div>
    <div class="form-group">
        <label for="Comments">Comments</label><br>
        <textarea name="comments" id="comments" rows="3" style="margin: 0px; width: 395px; height: 110px;">{{ $emp_sal->comments }}</textarea>

    </div>
     <div class="row form-group bt_form">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" id="send_form" class="btn btn-success">Update</button>
     </div>
</form>