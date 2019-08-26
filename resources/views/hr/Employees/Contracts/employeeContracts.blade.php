@extends('hr.hrMaster')





@section('content')





<div class="row mt-1">

  <div class="col-md-12">
    <nav aria-label="breadcrumb">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{URL::to('hrDashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeHome')}}">Employee</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeContract')}}">Contracts</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeSalaries')}}">Salries</a></li>
 <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeComplaints')}}">Complaints</a></li><li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeAttendence')}}">Attendence</a></li>
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
<p class="text-white font-weight-bold " >Contracts</p>
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
<p class="text-white font-weight-bold anchor">Salaries</p>
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
<p class="text-white font-weight-bold anchor">Complaints</p>
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
<p class="text-white font-weight-bold anchor">Attendence</p>
</div>

</a>
</div>
</div><!-- end of card -->









</div>

<!-- end section cards -->

{{-- add contract button --}}
<div class="row">
<div class="col-md-12">
<button type="button"  data-toggle="modal" data-target="#addContractModel" class="btn btn-secondary float-left" id="btnAddContract" ><i class=" text-white font-weight-bold fas fa-arrow-down mr-2"></i>Add Contract</button>
</div>
</div>
{{-- end of add contract button --}}

<div class="row mt-5">
<div class="col-md-12">
<button class="btn btn-secondary float-left"><i class=" text-white font-weight-bold fas fa-arrow-down mr-2"></i>Contracts </button>


<div class="table-responsive" id="table1">
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
{{-- add contract model  --}}
<!-- Button trigger modal -->
<div class="modal fade" id="addContractModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Employee Contract</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="renderAddContractModel">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{{-- end of add contract model  --}}

<script>
$(document).ready(function(){
$('#btnAddContract').on('click',function(){
$.get('/returnAddContractView',function(data){
$('#renderAddContractModel').empty().append(data);
    });
        });


//get credentials against name

$('#renderAddContractModel').on('click','#name',function(){
    var name=$('#name').val();

$.ajax({
type:'get',
url:'/getCredentialsByName/'+name,
data:{name:name},
success:function(response){
$('#id').val(response.id);
console.log(response.id);
},
});



});


    });
</script>
@endsection
