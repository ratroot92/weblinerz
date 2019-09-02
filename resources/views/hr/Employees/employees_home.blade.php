@extends('hr.hrMaster')





@section('content')





<div class="row mt-1">

  <div class="col-md-12">
    <nav aria-label="breadcrumb">
  <ul class="breadcrumb">
   <li class="breadcrumb-item"><a href="{{ URL::to('hrHome')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeHome')}}">Employee</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeContract')}}">Contracts</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeSalaries')}}">Salaries</a></li>
 <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeComplaints')}}">Complaints</a></li>
 <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeAttendence')}}">Attendence</a></li>
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
<!-- messages -->
<div id="displayMessage" class="alert alert-danger font-weight-bold list-unstyled p-0 m-0 " style="font-size:16px" >

</div>
<!-- end of messages  -->
<div class="row">
	<div class="col-md-12">

<!-- asd -->
<div class="btn-group" id="openmenu-btn"  style="float: right;">
<button type="button" id="dlDropDown" class="btn  btn-success dropdown-toggle" style="top: 40px;"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Employee
</button>

<div class="dropdown-container customDropdown">
<div class="dropdown-menu dropdown-menu-right customDropdownMenu" id="employee_dropdown" onClick="event.stopPropagation();" style="width: 390px;" >

<div class="container-fluid">

<!-- form messgaes -->
<div class="row">
<div class="col-md-12 text-center alert alert-danger font-weight-bold p-0 m-0" id="addEmployeeValidation">

</div>
</div>
<!-- end of form messages -->
<div class="row">
<div class="col-md-12">
<!-- form -->
<form    enctype="multipart/form-data" id="submit_form" name="submit_form" action={{route('add_employee_ajax')}} >
 @csrf

 <!--
<span class="font-weight-bold ">Employee ID</span>
<input class="inp col-md-12" type="number"  id="id"   name="id" />
@if($errors->has('id'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;" >&spades;{{ $errors->first('id') }}</div>
@endif
-->


<div class="row">

<div class="col-md-12">

<span class="font-weight-bold ">Name</span>
<input class="inp col-md-12" type="text" placeholder="@example John Doe" id="name" minlength="3" maxlength="20" name="name"  pattern="^[A-Za-z -]+$" required />
@if($errors->has('name'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('name') }}</div>
@endif
</div>

<div class="col-md-12">
<span class="font-weight-bold  " >Email</span>
<input class="inp col-md-12" type="email" placeholder="@example JohnDoe@abc.com" id="email" name="email" maxlength="25" required />
@if($errors->has('email'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('email') }}</div>
@endif
</div>



<div class="col-md-12">
        <span class="font-weight-bold " >Password</span>
<input class="inp col-md-12" type="password"  id="password"  minlength="8" maxlength="14"  name="password" required/>
@if($errors->has('password'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('password') }}</div>
@endif
</div>





<div class="col-md-12 mt-3 d-flex flex-row justify-content-between ">
  <!-- Material inline 1 -->
<div class="form-check form-check-inline" >
  <input type="radio" class="form-check-input" id="status" name="status" value="Contract" required />
  <label class="form-check-label font-weight-bold" for="materialInline1">Contact</label>

</div>

<!-- Material inline 2 -->
<div class="form-check form-check-inline"  >
  <input type="radio" class="form-check-input" id="status" name="status" value="Probabtion" />
  <label class="form-check-label font-weight-bold" for="materialInline2">Probabtion</label>
</div>


</div>


<div class="col-md-12 mt-3 ">

 <div class="row">

<div class="col-md-6">
<span class="font-weight-bold " >Duration To: </span>
  <input class="inp col-md-12" type="date" placeholder="@example JohnDoe@abc.com" id="start_date" name="start_date" required />
  @if($errors->has('start_date'))
  <div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('start_date') }}</div>
  @endif
</div>


<div class="col-md-6">
  <span class="font-weight-bold  " >Duration From: </span>
  <input class="inp col-md-12" type="date" placeholder="@example JohnDoe@abc.com" id="end_date" name="end_date" required />
  @if($errors->has('end_date'))
  <div class=" alert alert-danger  font-weight-bold m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('end_date') }}</div>
  @endif
</div>
</div>
</div>





  <div class="col-md-12 mt-3">
<span class="font-weight-bold  " >Salary</span>
<input class="inp col-md-12" type="number" placeholder="@30,000 PKR" min="1" max="100000" id="e_salary" name="e_salary" requireds />
@if($errors->has('e_salary'))
  <div class=" alert alert-danger  font-weight-bold m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('e_salary') }}</div>
  @endif
</div>



<div class="col-md-12 drag_files mt-3">
<div class="row my-auto">

<div class="col-md-12 text-center mt-4" >

  <img class="logo mt-3 " src="{{url('../icons/files.png' )}}" width="55" height="55" style="opacity: 1;">
 <input type="file" name="uploads[]" multiple required/>
 @if($errors->has('uploads'))
  <div class=" alert alert-danger  font-weight-bold mt-2 m-0 p-0" style="font-size:14px;">&spades;{{ $errors->first('uploads') }}</div>
  @endif




 </div>
 </div>
</div>
<div class="col-md-12 mt-3">
<div class="row">
<div class="col-md-6 text-center">
<button type="button" class="btn " id="btnCloseAddEmployee" style="background-color:#ff4f4e;">Close</button>
</div>

<div class="col-md-6 text-center">
<!-- style="background-color:#a31b78 " -->
  <input type="submit" name="submit" id="add_employee_btn" class="btn btn-success" />

 </div>

 </div>
  </div>
</div>
</form>

<!-- form -->
</div>
</div>
</div>
</div>
</div>
</div>
<!-- asd -->
</div>
</div>






<!-- CONTENT -->
<div id="renderEditModel" class="col-md-12"></div>
<div class="row">
  <div class="col-md-12">

  </div>
</div>

<!-- CONTENT -->
<section id="print_section">
  <div class="row" id="div_table"></div>
</section>

<div class="row">
  <div class="col-md-12 text-center">
    
<a href="{{URL::to("/allEmployeePDF")}}" class="btn  btn-primary" title=""><i class=" text-white font-weight-bold fas fa-arrow-down mr-2"></i>Download PDF</a>
<a onclick="printDiv()" class="btn  btn-primary" title=""><i class=" text-white font-weight-bold fas fa-arrow-down mr-2"></i>Print PDF</a>
  </div>
</div>


<script>
    //show hide messages errors divs

    $(document).ready(function(){
	$('#displayMessage').hide();
    $('#addEmployeeValidation').hide();
    $('#editEmployeeValidation').hide();


    });
</script>

<script type="text/javascript">
$(document).ready(function (){



	//display employees table using ajax
 $.get('{{URL::to("employee_table_view")}}',function(data){
	 $('#div_table').empty().append(data);
});

 //start of form return edit_table_employee

 $('#div_table').on('click','#edit',function(){
     var id=$(this).data('task');
$.get('{{URL::to("employee_table_edit")}}/'+id,function(data){
	 $('#renderEditModel').empty().append(data);
     $('#employee_edit_model').modal('show');

});

 });//end of return  edit table em,ployee



//start of form edit_table_employee

 $('#renderEditModel').on('submit','#edit_employee_form',function(event){
     event.preventDefault();
 $.ajax({
            url:$(this).attr('action'),
                type:'POST',
				 data:new FormData(this),
                contentType: false,
                processData: false,
                dataType:'json',

 success: function(data){
  $('#displayMessage').empty();
if(data.success){
$('#displayMessage').show();

$('#displayMessage').html('<p>&spades;Employee Successfully Edited to Database </p>');
$('#employee_edit_model').modal('hide');
$('#displayMessage').fadeOut(15000);
//relaod view
$.get('{{URL::to("employee_table_view")}}',function(data){
$('#div_table').empty().append(data);
});//end of reload view
 }
else{
  $('#displayMessage').show();

$.each(data.error, function(i, v){
$('#displayMessage').append('<p>&spades;'+v+'</p>');
});

$('#displayMessage').fadeOut(15000);
}//end of success function
 },
});//end of ajax
});//end of edit table employee

 //start of delete table employee
 $('#div_table').on('click','#delete',function(){
var id=$(this).data('task');
$.get('{{URL::to("employee_table_delete")}}/'+id,function(data){
$('#displayMessage').show();
$('#displayMessage').html("Employee has Been Sucessfully Deleted");
$('#displayMessage').fadeOut(15000);
$('#div_table').empty().append(data);

});
});
 //end of delte_table_employee






//add employee function
$('#submit_form').submit(function () {
event.preventDefault();

$.ajax({
            url:$(this).attr('action'),
                type:'POST',
				 data:new FormData(this),
                contentType: false,
                processData: false,
                dataType:'json',

 success: function(data){
if(data.success){
$('#displayMessage').show();
$('#displayMessage').empty().html('<p>&spades;Employee Successfully Added to Database </p>');
$('#employee_edit_model').modal('hide');
$('#displayMessage').fadeOut(15000);
$("#dlDropDown").dropdown("toggle");
//relaod view
$.get('{{URL::to("employee_table_view")}}',function(data){
$('#div_table').empty().append(data);
});//end of reload view
 }
else{
  $('#displayMessage').show();
  $('#displayMessage').empty().append('');
$.each(data.error, function(i, v){
$('#displayMessage').append('<p>&spades;'+v+'</p>');
});

}
 $('#displayMessage').fadeOut(30000);
},//end of success function
 });//end of ajax function


});//end of function



//close edit employee model on close button
$('#renderEditModel').on('click','#closeBtn',function(){
$('#employee_edit_model').modal('hide');
});




});//end of ready function






$(document).ready(function(){
$('#div_table').on("click",'#employee_table',function(){
$('#employee_table').dataTable();
});




});




</script>

<script>
$(document).ready(function(){
$('#btnCloseAddEmployee').on('click','#employee_dropdown',function() {
  $(this).parents('.dropdown').find('button.dropdown-toggle').dropdown('toggle')
});

});
//add employee drop down close on click close

   $(document).ready(function(){
$("#btnCloseAddEmployee").click(function() {
   $("#dlDropDown").dropdown("toggle");

});

//downlaod pdf (all employees )
$('#pdfBtn').on('click',function(){
$.get('',function(data){
  console.log(data);
});
});//end of download pdf
   });


//print employee pdf 
function printDiv()
   {
    
       var divToPrint=$('#div_table #employee_table')[0].outerHTML;
      // alert(divToPrint);
       var newWin=window.open('','Print-Window');
       newWin.document.open();
        newWin.document.write('<html><body onload="window.print()">'+divToPrint+'</body></html>');
       newWin.document.close();
       setTimeout(function(){newWin.close();},10);
   }
</script>

@endsection
