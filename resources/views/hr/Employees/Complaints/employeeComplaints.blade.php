@extends('hr.hrMaster')





@section('content')

<link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">



<div class="row mt-1">

  <div class="col-md-12">
    <nav aria-label="breadcrumb">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{URL::to('hrDashboard')}}">Dashboard</a></li>
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
    
</div><!-- end of card -->

</div>

<!-- end section cards -->


<div class="row mt-5">
<div class="col-md-4">


    <div class="table-responsive" id="navigatable_div_1">
        <h5>All Employees</h5>
        <table border="1" class="table table-striped" id="table1" style="padding-top: 16px;">
            <thead>
                <tr style="background-color: #b85197;">
                    <th style="color: #fff;" scope="col">Sr</th>
                    <th style="color: #fff;" scope="col">Name</th>                
                </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp    
            @foreach ($employeeData as $empData)  
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>
                        <a data-task-id="{{ $empData->id }}" href="{{ url('/hrEmployeeComplaints/'.$empData->id) }}">{{ $empData->name }}</a>
                    </td>   
                </tr>          
            @endforeach
            </tbody>
        </table>
    </div>

</div>
    <div class="col-md-8">
        <div class="table-responsive" id="navigatable_div_1">
            <h5>All Complaints</h5>
            <div id="complaints">
                <div class="row m-0 p-0">
                    <div class="col-md-12 m-0 p-0">
                        <h6 style="text-align: center;">Complaint Title</h6>
                    </div>

                    <div class="col-md-6 m-0 p-0">
                        <p>Complaint ID:</p>
                        <p>Complaint Title:</p>
                        <p>Complaint Description:</p>                        
                    </div>
                    
                     <div class="col-md-6 m-0 p-0">                   
                        <p>Date:</p>
                        <p>Status:</p>
                    </div>

                </div>
                
                <hr>
                <div class="row m-0 p-0">
                     <div class="col-md-12 m-0 p-0">                        
                        <textarea name="comments" id="comments" rows="3" cols="90"></textarea>
                    </div>
                </div>
                <hr>

                 <div class="row m-0 p-0">
                     <div class="col-md-6 m-0 p-0">
                        <button type="submit" class="btn btn-secondary">Solve & Close</button>
                    </div>
                    <div class="col-md-6 m-0 p-0">
                        Assign To
                        <select class='form-control' style='width: 200px;'>
                            <option value='CEO'>CEO</option>
                            <option value='TeamLead'>Teamlead</option>
                            <option value='Project-Manager'>Project Manager</option>
                        </select>
                    </div>
                </div>
                <!-- <img src="images/1.jpg" width="700px; height=100px; " alt="" style="border: 1px solid #000;"> -->
            </div>        
        </div>
    </div>    
</div>
<script type="text/javascript">

$('table td a').click(function(event){
   
    event.preventDefault();
    var id =  $(this).data("task-id");

    $.ajax({
        url : '/complaintsdata',
        type: 'get',
        data : { 'id' : id },
        dataType: 'json',
        success: function(response)
        {
            $('#complaints').empty(); 
            if (response.length > 0)
            {                    
                $.each(response,function (i,item) 
                {
                    // $('#complaints').append("<h5>Complaints ID: &nbsp;"+item.id+"</h5>"+"<h5>Complaints Title:&nbsp;"+item.title+"</h5>"+"<h5>Complaints Description:&nbsp;"+item.description+"</h5>"+"<h5>Complaints status:&nbsp;"+item.status+"</h5>"+"<select class='form-control' style='width: 200px;'><option value='CEO'>CEO</option><option value='TeamLead'>Teamlead</option><option value='Project-Manager'>Project Manager</option></select>");               
                });
            }

        }, error:function(e){
            console.log(e);
        }
    });

});
</script>
@endsection