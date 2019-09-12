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
<div class="row">
	<div class="col-md-6 padd">
		<img src="{{ asset('Employee_Files/Files/'.$emp_sal->employee_files) }}" width="100px;" height="100px;" alt="">
	</div>

	<div class="col-md-6">
		<p>Name: {{ $emp_sal->employee->name }} </p>
		<p>ID:  {{ $emp_sal->employee->id }}</p>
		<p>Joining Date:  {{ $emp_sal->employee->start_date }}</p>
		<p>Status: {{ $emp_sal->status }}</p>
	</div>
</div>
<div class="row">
	<div class="col-md-6 padd">
		<div class="form-group">
			<p>Date: {{ $emp_sal->date }} </p>
		</div>
		<div class="form-group">
			<p>Total Salary: {{ $emp_sal->total }}</p>
		</div>
		<div class="form-group">
			<p>Fine:&nbsp;{{ $emp_sal->fine }}</p>
		</div>
		<div class="form-group">
			<p>Received: &nbsp;{{ $emp_sal->received }}</p>
		</div>
		<div class="form-group">
			<p>Pending: {{ $datapending }}</p>
		</div>
		<div class="form-group">
			<a class="btn btn-default btn-close" href="{{ url('/hrEmployeeSalaries') }}">Back</a>
			<button type="submit" id="send_form" onClick="window.print()" class="btn btn-success btn002">Print</button>

		</div>
	</div>
</div>

</div>
</div>

@endsection