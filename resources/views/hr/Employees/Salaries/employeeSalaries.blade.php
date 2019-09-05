@extends('hr.hrMaster')

@section('content')

<link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style type="text/css" media="screen">
.error {
    color: red;
    font-size: 14px;
}
</style>

<div class="row mt-1">
  
  <div class="col-md-12">
    <nav aria-label="breadcrumb">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{URL::to('hrDasboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeHome')}}">Employee</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeContract')}}">Contracts</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeSalaries')}}">Salaries</a></li>
 <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeComplaints')}}">Complaints</a></li> <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeAttendence')}}">Attendence</a></li>      
  </ul>
</nav>
  </div>
</div>




<!-- section of cards -->

<div class="row p-1">
<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-dark outer">
<a href="{{ url('/hrEmployeeContract') }} " class="anchor" >
<div class="inner  " >                                            
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold " >Contracts</p> 
</div>                  

</a>
</div>
</div><!-- end of card -->


<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-warning outer">
<a href="{{ url('/hrEmployeeSalaries') }}" class="anchor">
<div class="inner  " >                                            
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold anchor">Salaries</p> 
</div>                  

</a>
</div>
</div><!-- end of card -->


<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-primary outer">
<a href="{{ url('/hrEmployeeComplaints') }}" class="anchor">
<div class="inner  " >                                            
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold anchor">Complaints</p> 
</div>                  

</a>
</div>
</div><!-- end of card -->



<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-danger outer">
<a href="{{ url('/hrEmployeeAttendence') }}" class="anchor">
<div class="inner  " >                                            
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold anchor">Attendence</p> 
</div>                  

</a>
</div>
</div><!-- end of card -->









</div>

<!-- end section cards -->  


  
<div class="row mt-5">
<div class="col-md-12">
 <div id="flash_message_success"></div>
<button class="btn btn-secondary float-left" id="navigatable_btn_1"><i class=" text-white font-weight-bold fas fa-arrow-down mr-2" ></i>Salaries </button>
<br>
    <div class="row" id="msg"></div>
    <div class="row" id="div_table"></div>

<div class="table-responsive" id="navigatable_div_1">
                    <div class="checkbox">
                    <label>                       
                        <div class="form-group">
                            
                            <select class="form-control drop_select" id="sel1" style="border: none; box-shadow: none;">
                                <option>Please Select</option>
                                <option value='01'>January</option>
                                <option value='02'>February</option>
                                <option value='03'>March</option>
                                <option value='04'>April</option>
                                <option value='05'>May</option>
                                <option value='06'>June</option>
                                <option value='07'>July</option>
                                <option value='08'>August</option>
                                <option value='09'>September</option>
                                <option value='10'>October</option>
                                <option value='11'>November</option>
                                <option value='12'>December</option>
                            </select>
                        </div>
                    </label>
                    &emsp;&emsp;&emsp;&emsp;&emsp;
                    <label>
                        <input type="checkbox" id="checkbox1" value="0" > Salaries Cleared
                    </label>
                    &emsp;&emsp;&emsp;&emsp;&emsp;
                    <label>
                        <input type="checkbox" id="checkbox2" value="1"> Salaries Pending
                    </label>                            &emsp;&emsp;&emsp;&emsp;&emsp;
                    <!-- <button type="button" class="btn btn-success">Export In Excel</button> -->
                    <a data-toggle="add_new" href="{{ url('/add_employee_salaries_create') }}" class="btn btn-primary add_left_button">Make Draft</a>
                    </div>
                     
                        <table class="table table-striped" id="table1" style="padding-top: 16px;">
                            <thead>
                                <tr style="background-color: #b85197;">
                                    <th style="color: #fff;" scope="col">Sr</th>
                                    <th style="color: #fff;" scope="col">Name</th>
                                    <th style="color: #fff;" scope="col">Salary</th>
                                    <th style="color: #fff;" scope="col">Date</th>
                                    <th style="color: #fff;" scope="col">Fine</th>
                                    <th style="color: #fff;" scope="col">status</th>
                                    <th style="color: #fff;" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="termsrow">
                            @php $i=1; @endphp
                            @foreach ($salariesdata as $resource)
                                @foreach ($resource->employeessalarydrafts as $b)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $resource->name }}</td>
                                        <td>{{ $resource->salary }}</td>
                                        <td>{{ $b->date }} &emsp;</td>
                                        <td>{{ $b->fine }} &emsp;</td>
                                        <td>{{ $b->status }}</td>
                                        <td>
                                            <a href="{{ url('/view-detail/'.$b->id) }}"><img src="{{ asset('images/2-min.png') }}" alt=""></a>

                                            <a data-toggle="edit_sal" data-task="{{ $b->id }}" href="{{ url('/editview/'.$b->id) }}"><img src="{{ asset('images/300-min.png') }}" alt=""></a>

                                            <a href="{{ url('/hrEmployeeSalaries/'.$b->id) }}"><img src="{{ asset('images/400-min.png') }}" alt=""></a>
                                        
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
</div>
    
</div>
</div>
<!-- Add Popup -->
<div class="modal fade" id="add_modal">
    <div class="modal-dialog modal-dialog-centered" id="add_modal" data="toggle" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
​
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit_modal">
    <div class="modal-dialog modal-dialog-centered" id="edit_modal" data="toggle" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Salary </h4>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div id="div_table alert alert-danger"></div>
            <div class="modal-body" id="render_model">
            </div>
        </div>
    </div>
</div>
    <!-- bootstrap datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

<script type="text/javascript">

//------------------------Select Month Drop Down ---------------------
$(document).ready(function(){
    $("select.drop_select").change(function(){
        var selectedMonth = $(this).children("option:selected").val();
         var str = '';
          var counter = 1;
         $.ajax({
            url : '/getmonth',
            type: 'get',
            data : { 'date' : selectedMonth },
            dataType: 'json',
            success: function($result){
                //console.log($result);
                $('tbody').empty();                
                if ($result.length>0)
                {
                    $.each($result,function (i,item) {
                    //console.log(item.employee.name);
                    $('tbody').append("<tr><th scope='row'>"+counter+++"</th><td>"+item.employee.name+"</td><td>"+item.employee.salary+"</td><td>"+item.date+"</td><td>"+item.fine+"</td><td>"+item.status+"</td><td>"+'<a href="view-detail/'+item.id+'"><img src="/images/2-min.png" alt=""></a> <a data-toggle="edit_sal" href="/editview/'+item.id+'"><img src="/images/300-min.png" ></a>&nbsp;<a href="/hrEmployeeSalaries/'+item.id+'"><img src="/images/400-min.png"></a>'+"</td></tr> ");
                   });
                }
                else
                {
                   $('tbody').append( "<tr><td colspan='6' class='text-center'>"+'No data available in table'+"</td><td>");
                }
                
                //$('#termsrow').html(str);
            }, error:function(e){
                console.log(e);
            }
        });
        
    });
});
//-------------------------- Salaries Cleared ----------------------------
$(document).ready(function(){
    $("input#checkbox1").change(function(){
        var selectedpending = $(this).val();
        //console.log(selectedpending);
        var counter = 1;
         $.ajax({
            url : '/getsalariescleared',
            type: 'get',
            data : { 'pending' : selectedpending },
            dataType: 'json',
            success: function($result){
                //console.log($result.length); 
                $('tbody').empty();   
                if ($result.length>0)
                {
                    $.each($result,function (i,item) {
                    //console.log(item.employee.name);
                    $('tbody').append("<tr><th scope='row'>"+counter+++"</th><td>"+item.employee.name+"</td><td>"+item.employee.salary+"</td><td>"+item.date+"</td><td>"+item.fine+"</td><td>"+item.status+"</td><td>"+'<a href="view-detail/'+item.id+'"><img src="/images/2-min.png" alt=""></a>&nbsp;<a data-toggle="edit_sal" href="/editview/'+item.id+'"><img src="/images/300-min.png" ></a>&nbsp;<a href="/hrEmployeeSalaries/'+item.id+'"><img src="/images/400-min.png"></a>'+"</td></tr> ");
                   });
                }
                else
                {
                   $('tbody').append( "<tr><td colspan='6' class='text-center'>"+'No data available in table'+"</td><td>");
                }   
            }, error:function(e){
                console.log(e);
            }
        });
        
    });
});   
//----------------- Salaries Pending ----------------------------  
$(document).ready(function(){
    $("input#checkbox2").change(function(){
        var salariespending = $(this).val();
        var counter = 1;
        //alert('333');
        //console.log(selectedpending);
         $.ajax({
            url : '/getsalariespending',
            type: 'get',
            data : { 'pending' : salariespending },
            dataType: 'json',
            success: function($result){
                //console.log($result.length); 
                $('tbody').empty();   
                if ($result.length>0)
                {
                    $.each($result,function (i,item) {
                    //console.log(item.employee.name);
                    $('tbody').append("<tr><th scope='row'>"+counter+++"</th><td>"+item.employee.name+"</td><td>"+item.employee.salary+"</td><td>"+item.date+"</td><td>"+item.fine+"</td><td>"+item.status+"</td><td>"+'<a href="view-detail/'+item.id+'"><img src="/images/2-min.png" alt=""></a>&nbsp;<a data-toggle="edit_sal" href="/editview/'+item.id+'"><img src="/images/300-min.png" ></a>&nbsp;<a href="/hrEmployeeSalaries/'+item.id+'"><img src="/images/400-min.png"></a>'+"</td></tr> ");
                   });
                }
                else
                {
                   $('tbody').append( "<tr><td colspan='6' class='text-center'>"+'No data available in table'+"</td><td>");
                }   
            }, error:function(e){
                console.log(e);
            }
        });
        
    });
});   
//----------------- Salaries Show Hide button -------------------
  $(document).ready(function(){  
    var btn1 = document.getElementById("navigatable_btn_1");
    btn1.addEventListener('click', function() {  
        var div_1 = document.getElementById("navigatable_div_1");
        if (div_1.style.display === "none") {
            div_1.style.display = "block";
        } else {
            div_1.style.display = "none";
        }
    });

  });  
  
//------------------------------------------
    $(document).ready(function () {
        $(function () {
            $('#table1').DataTable()
        })
    });
    
    //---------------------------------------------------------
    
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }

    //-----------------------------------------------------------
     //Date picker
    // $('#date').datepicker({
    //     autoclose: true
    // })   
    
    //---------------------Edit form Modal Popup-----------------
    $(document).ready(function () {
        $(document).on('click','a[data-toggle=edit_sal]',function (event) {
            event.preventDefault();
            $('#edit_modal').find('.modal-body').load($(this).attr('href'));
            $('#edit_modal').modal('show');

        });
    });
    //---------------------Add form Modal Popup-----------------
    $(document).ready(function () {
        $(document).on('click','a[data-toggle=add_new]',function (e) {
            e.preventDefault();
            $('#add_modal').find('.modal-body').load($(this).attr('href'));
            $('#add_modal').modal('show');
        });
    });
</script>
@endsection