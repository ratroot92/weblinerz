<form enctype="multipart/form-data" name="addEmployeesReports" id="addEmployeesReports" method="post" class="form-container">
    @csrf      
   
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" class="name_documents" placeholder="Name" name="name" >
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="name_documents" id="description" rows="3" style="margin: 0px; width: 446px; height: 110px;"></textarea>
        
    </div>    
    <div class="form-group">
        <label for="file">File</label>
        <input type="file" id="file" name="file" placeholder="File">
    </div>
    <div class="form-group">            
        <label for="Status">Status</label><br>
        <select name=status id="status" class="name_documents">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>

    </div>
    <div class="row form-group bt_form">
        <button type="button" class="btn cancel" data-dismiss="modal">Close</button>
        &emsp;&emsp;
        <button type="submit" class="btn btn-success" style="position: relative; background-color: #c879af !important;left: 20px;">Add</button>
    </div>
</form>

<script type="text/javascript">
//------------- Add Form validation------------------------      
$(document).ready(function() {
    $('#addEmployeesReports').submit(function(e) {
    e.preventDefault();
        var name = $('#name').val();
        var description = $('#description').val();
        var file = $('#file').val();

            $(".error").remove();

            if (name.length < 1) {
                $('#name').after('<span class="error">This Name field is required</span>');
            } 
            if (description.length < 1) {
                $('#description').after('<span class="error">This Description field is required</span>');
            }   
            if (file.length < 1) {
                $('#file').after('<span class="error">This file field is required</span>');
            }   

        });

});

//-------------------------------------------
$('#addEmployeesReports').submit(function () {
   
    var str = '';
    var counter = 1;
    event.preventDefault();
    $.ajax({
        url         : '/add_employee_reports',
        type        : 'post',
        data        : new FormData(this),
        processData : false,
        contentType : false,
        success     : function ($result) {
            //console.log($result);
            //$('tbody').empty();
            $('#add_modal').modal('hide');
            var message = '<p class="alert alert-success alert-dismissible" style=" background-color: #d4edda !important; border-color: #c3e6cb;"><strong>Success!!</strong> &nbsp;&nbsp; Record Added successfully &nbsp;&nbsp;&nbsp; <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>';
            $('#flash_message_success').html(message);
            $('#flash_message_success').fadeOut(15000);

            $('tbody').append("<tr><th scope='row'>"+counter+1+"</th><td>"+$result.reports.name+"</td><td>"+$result.reports.description+"</td><td>"+$result.reports.status+"</td><td>"+'<a data-toggle="edit_reports" href="/editview/'+$result.reports.id+'"><img src="/images/300-min.png" ></a>&nbsp;<a href="/employeedocuments/'+$result.reports.id+'"><img src="/images/400-min.png"></a>'+"</td></tr> ");

          
            
        },
        error        : function ($result) {
            console.log('in error');
        }
    })
});

</script>