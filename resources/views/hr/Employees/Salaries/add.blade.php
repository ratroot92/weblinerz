<!-- <div class="form-popup" id="myForm"> -->
    <form name="addEmployeesSalaries" id="addEmployeesSalaries" class="form-container">
        @csrf
        <div class="form-group">
             <label for="date">Date</label>
            <input type="date" class="form-control pull-right" id="date" name="date" placeholder="Date">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <select class="form-control" id="name" name="emp_id" style="box-shadow: none; margin-bottom: 22px;">
                <option>Please Select</option>
                @foreach($salariesName as $salary)
                    <option id="salary_id"  value="{{ $salary->id }}">{{ $salary->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" id="salary" class="salary" placeholder="Salary" name="salary" >
        </div>
        <div class="form-group">
            <label for="fine">Fine</label>
            <input type="text" id="fine" name="fine" placeholder="Fine" >
        </div>
        <div class="form-group">
             <label for="total">Total</label>
            <input type="text" id="total_sal"  name="total_sal" placeholder="Total Salary" >
        </div>
        <div class="form-group">
            <label for="receive">Received</label>
            <input type="text" id="receive" name="receive" placeholder="Received">
        </div>
        <div class="form-group">
            <label for="pending">Pending</label>
            <input type="text" id="pending" name="pending" value="" placeholder="Pending" name="pending">
        </div>
        <div class="form-group">            
            <label for="Comments">Comments</label><br>
            <textarea name="comments" id="comments" rows="3" style="margin: 0px; width: 446px; height: 110px;"></textarea>

        </div>
        <div class="row form-group bt_form">
            <button type="button" class="btn cancel" data-dismiss="modal">Close</button>
            &emsp;&emsp;
            <button type="submit" class="btn btn-success" style="position: relative; background-color: #c879af !important;left: 20px;">Add</button>
        </div>
    </form>
<!-- </div> -->
<script type="text/javascript">
//------------- Add Form validation------------------------      
$(document).ready(function() {

  $('#addEmployeesSalaries').submit(function(e) {
    e.preventDefault();
    var date = $('#date').val();
    var salary = $('#salary').val();
    var fine = $('#fine').val();
    var total_sal = $('#total_sal').val();
    var receive = $('#receive').val();
    var pending = $('#pending').val();
    var comments = $('#comments').val();

    $(".error").remove();

    if (date.length < 1) {
        $('#date').after('<span class="error">This Date field is required</span>');
    } 
    if (salary.length < 1) {
        $('#salary').after('<span class="error">This salary field is required</span>');
    }   
    if (fine.length < 1) {
        $('#fine').after('<span class="error">This fine field is required</span>');
    }   receive
    if (total_sal.length < 1) {
        $('#total_sal').after('<span class="error">This Total field is required</span>');
    }  
    if (receive.length < 1) {
        $('#receive').after('<span class="error">This Receive field is required</span>');
    } 
    if (pending.length < 1) {
        $('#pending').after('<span class="error">This Pending field is required</span>');
    }
    if (comments.length < 1) {
        $('#comments').after('<span class="error">This Comments field is required</span>');
    }
    
  });

});

//------------------------------------------------------
      $('#name').click(function(event){
        event.preventDefault();
        var name = $('#name').val();

        $.ajax({
            url : '/getsalary',
            type: 'get',
            data : { 'name' : name },
            dataType: 'json',
            success: function(response){
                $('#salary').val(response);

            }, error:function(e){
                console.log(e);
            }
        });

    });
    //----------------------------------------
    $('#fine').change(function(event){
        event.preventDefault();

        var salary = parseInt($('#salary').val());
        var fine = parseInt($('#fine').val());
        var total =  salary - fine;
        $('#total_sal').val(total);

    });
    //-----------------------------------------
    $('#receive').change(function(event){
        event.preventDefault();
        var total = parseInt($('#total_sal').val());
        var receive = parseInt($('#receive').val());
        var pending =  total - receive;
        $('#pending').val(pending);

    });

//-------------------------------------------
    $('#addEmployeesSalaries').submit(function () {
       
        var str = '';
        var counter = 1;
        event.preventDefault();
        $.ajax({
            url         : '/add_employee_salaries',
            type        : 'post',
            data        : $('#addEmployeesSalaries').serialize(),
            dataType    : 'json',
            success     : function ($result) {
                //console.log($result);
                //$('tbody').empty();
                $('#add_modal').modal('hide');
                //console.log($result.employee.fine);
                  
                //console.log(item);
                $('tbody').append("<tr><th scope='row'>"+counter+1+"</th><td>"+$result.employee_name+"</td><td>"+$result.employee_salary+"</td><td>"+$result.employee.date+"</td><td>"+$result.employee.fine+"</td><td>"+$result.employee.status+"</td><td>"+'<a data-toggle="edit_sal" href="/editview/'+$result.employee.id+'"><img src="/images/300-min.png" ></a>&nbsp;<a href="/hrEmployeeSalaries/'+$result.employee.id+'"><img src="/images/400-min.png"></a>'+"</td></tr> ");
                
            },
            error        : function (result) {
            }
        })
    });

</script>