@extends('employees.employeeMaster');

@section('content')

<div class="row mt-1">
		<div class="col-md-12 text-center ">
			<a href="{{URL::to('/clocklogin')}}" class="btn btn-lg  btn-primary float-right" title="Mark Attendence">ClockIN</a>
		</div>
	</div>
	@endsection