
<form action="{{ url('/hrEmployeeSalaries/update_employeesalary/') }}" name="editEmployeesSalaries" method="post" id="editEmployeesSalaries" class="form-container formdata editform">
    @csrf
    <div id="alrtmsg1"></div>

    <div class="form-group">
        <input type="hidden" name="saldraftID" value="{{$emp_sal->id}}">
        <label for="date">Date</label>
        <input type="text" value="{{$emp_sal->date}}" class="form-control pull-right" id="date" name="date" placeholder="Date">
        @if ($errors->has('date'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('date') }}</strong>
            </span>
        @endif
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
         <button type="submit" id="send_form" class="btn btn-success btn002">Update</button>
     </div>
</form>
<script type="text/javascript">
    $('#editEmployeesSalaries').submit(function () {
        event.preventDefault();
        //alert('asdasd');
        var str = '';
        $.ajax({
            url         : $(this).attr('action'),
            type        : 'post',
            data        : new FormData(this),
            processData : false,
            contentType : false,
            dataType    : 'json',
            success     : function (result) {
                if (result==1)
                {
                    $('#edit_modal').modal('hide');
                    var message = '<p class="alert alert-success alert-dismissible" style=" background-color: #d4edda !important; border-color: #c3e6cb;"><strong>Success!!</strong> &nbsp;&nbsp; Record Updated successfully &nbsp;&nbsp;&nbsp; <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>';
                    $('#flash_message_success').html(message);
                    $('#flash_message_success').fadeOut(15000);
                }
                else {
                    $.each(result.error,function (i,value) {
                        var html = '<p class="alert alert-danger alert-dismissible" style=" background-color: #e46470 !important;"><strong>Error!!</strong> &nbsp;&nbsp; '+value+'&nbsp;&nbsp;&nbsp; <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>';
                        str = str + html;
                    });
                    $('#alrtmsg1').html(str);
                }
            },
            error        : function (data) {
                console.log('in error');
            }
        })
    });
</script>