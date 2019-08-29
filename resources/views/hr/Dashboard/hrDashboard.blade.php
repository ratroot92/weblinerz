@extends('hr.hrMaster')





@section('content')





<div class="row">

  <div class="col-md-12">
    <nav aria-label="breadcrumb">
  <ul class="breadcrumb">
     <li class="breadcrumb-item"><a href="{{URL::to('hrHome')}}">Dashboard</a></li>
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
<a href="{{ url('/hrEmployeeHome') }} " class="anchor" >
<div class="inner  " >
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold " >Employees</p>
</div>

</a>
</div>
</div><!-- end of card -->


<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-warning outer">
<a href="{{ url('/hr_employee_home') }}" class="anchor">
<div class="inner  " >
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold anchor">Reports</p>
</div>

</a>
</div>
</div><!-- end of card -->


<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-primary outer">
<a href="{{ url('/hr_employee_home') }}" class="anchor">
<div class="inner  " >
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold anchor">Careers</p>
</div>

</a>
</div>
</div><!-- end of card -->



<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-danger outer">
<a href="{{ url('/hr_employee_home') }}" class="anchor">
<div class="inner  " >
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold anchor">Expense</p>
</div>

</a>
</div>
</div><!-- end of card -->









</div>

<!-- end section cards -->

<div class="row">
<div class="col-md-12">
<button class="btn btn-secondary float-left" id="navigatable_btn_1"><i class=" text-white font-weight-bold fas fa-arrow-down mr-2"></i>Todays Interviews </button>



<div class="table-responsive" id="navigatable_div_1">
	  <table class="table table-striped" id="table1" style="padding-top: 16px;">
                                <thead>
                                    <tr style="background-color: #b85197;">
                                        <th style="color: #fff;" scope="col">Sr</th>
                                        <th style="color: #fff;" scope="col">Name</th>
                                        <th style="color: #fff;" scope="col">Salary</th>
                                        <th style="color: #fff;" scope="col">Fine</th>
                                        <th style="color: #fff;" scope="col">status</th>
                                        <th style="color: #fff;" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
</div>

</div>
</div>




<div class="row">
<div class="col-md-12">
<button class="btn btn-secondary float-left" id="navigatable_btn_2"><i class=" text-white font-weight-bold fas fa-arrow-down mr-2"></i>Todays Interviews </button>


<div class="table-responsive" id="navigatable_div_2">
	  <table class="table table-striped" id="table1" style="padding-top: 16px;">
                                <thead>
                                    <tr style="background-color: #b85197;">
                                        <th style="color: #fff;" scope="col">Sr</th>
                                        <th style="color: #fff;" scope="col">Name</th>
                                        <th style="color: #fff;" scope="col">Salary</th>
                                        <th style="color: #fff;" scope="col">Fine</th>
                                        <th style="color: #fff;" scope="col">status</th>
                                        <th style="color: #fff;" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
</div>

</div>
</div>
<script type="text/javascript">
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

    var btn2 = document.getElementById("navigatable_btn_2");
    btn2.addEventListener('click', function() {  
        var div_2 = document.getElementById("navigatable_div_2");
        if (div_2.style.display === "none") {
            div_2.style.display = "block";
        } else {
            div_2.style.display = "none";
        }
    });

  });    
</script>
@endsection
