<form enctype="multipart/form-data" action="{{ url('/employeereports/update_employeereport/') }}" name="editEmployeesreports" method="post" id="editEmployeesreports" class="form-container formdata editform">
    @csrf
    <div id="alrtmsg1"></div>
    <input type="hidden" name="saldraftID" value="{{$emp_reports->id}}">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" class="name_documents" placeholder="Name" name="name" value="{{ $emp_reports->name }}" >
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="name_documents" id="description" rows="3" style="margin: 0px; width: 392px; height: 110px;">{{ $emp_reports->description }}</textarea>
        
    </div>   

    <div class="form-group">
        <label for="file">File</label>
        <input type="file" id="file" name="file" placeholder="File">
        
    </div>

    <div class="form-group">            
        <label for="Status">Status</label><br>
        <select name=status id="status" class="name_documents">
            @if ($emp_reports->status=="active")
                <option value="active" selected>Active</option>
                <option value="inactive">Inactive</option>
            @elseif($emp_reports->status=="inactive")   
                <option value="active">Active</option>
                <option value="inactive" selected>Inactive</option> 
             @endif
        </select>
    </div>

     <div class="row form-group bt_form">         
         <button type="button" class="btn cancel" data-dismiss="modal">Close</button>
         <button type="submit" id="send_form" class="btn btn-success btn002">Update</button>
     </div>
</form>
<script type="text/javascript">
$('#editEmployeesreports').submit(function () {
    event.preventDefault();
    
    var str = '';
    $.ajax({
        url         : $(this).attr('action'),
        type        : 'post',
        data        : new FormData(this),
        processData : false,
        contentType : false,
        dataType    : 'json',
        success     : function (result) {
            //console.log(result);
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