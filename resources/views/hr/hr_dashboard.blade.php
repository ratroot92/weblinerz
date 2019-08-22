

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>WebLinerz</title>

<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('dist/employee_dashboard.css') }}">
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('dist/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('dist/bootstrap-table/dist/bootstrap-table.min.css')}}">
<!-- <script src="{{asset('js/app.js')}}"type="text/javascript" charset="utf-8" async defer></script> -->

<!-- <script src="{{asset('dist/bootstrap-table/dist/bootstrap-table.min.js')}}"type="text/javascript" charset="utf-8" async defer></script> -->
<script src="{{ asset('dist/jquery/dist/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script src="{{asset('dist/bootstrap/dist/js/bootstrap.bundle.min.js')}}"type="text/javascript" charset="utf-8" async defer></script>




<!-- bootstrap table -->

<!--Data Table-->
    



<style type="text/css" media="screen">
  
 


  </style>
  </head>

<body class="container-fluid">
  <!-- start of row -->

  <div class="row  h-100 border-warning border"><!-- start of navbar -->
   <div class="col-md-2 ">
     <img class="logo" src="{{url('../images/wz logo-new.png' )}}" width="80" height="40" style="opacity: 1;">
   </div>




   <div class="col-md-6 my-auto  " >
     <p class="text-dark font-weight-bold my-auto" style="font-weight: bolder;font-size:20px;">HR PORTAL</p>
   </div>






   <div class="col-md-4 text-center  my-auto">
    <div class="row " >
      <div class="col-md-6 text-center  my-auto">
    <i class="fas fa-envelope-open-text " style="font-size: 20px;"></i>
     <i class="fas fa-bell ml-3" style="font-size: 20px;"></i>
     <i class="fas fa-users ml-3" style="font-size: 20px;"></i>
      </div>
      <div class="col-md-6 text-center  d-flex flex-row my-auto">

       

  <div class="dropdown show  my-auto">
  <a class="btn btn-sm btn-outline-primary dropdown-toggle"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Fisal Shehzad
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="#">Dashboard</a>
    <a class="dropdown-item" href="#">Security</a>
  <a class="dropdown-item" href="{{URL::to('showLoginForm')}}">Logout</a>

  </div>
</div>
      </div>
    </div>


   </div>
  </div><!-- end of navbar-->


  <div class="row">
    <div class="col-md-2 bg-dark ">
      <!-- start of row 1-->
     <div class="row p-1">
       <div class="col-md-12 ">
         <div class="row pt-3">
           <div class="col-md-12 d-flex flex-row justify-content-center text-center">
              <div class="circle_sidebar border border-warning">

      </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end of row1 -->


       <!-- start of row2 -->
      <div class="row mt-3 p-1">
        <div class="col-md-12 text-center ">
           <p class="font-weight-bold text-white text-center my-auto ">Faisal Shehzad</p>
        </div>

      </div>
       <!-- end of row2 -->



      <div class="row " >
        <div class="col-md-12 m-0 p-1">
          <ul class="nav  d-flex flex-column m-0 p-0 ">

            <!-- start of tabs -->
            <li class="  nav_tab " style="width:100%; float:left;">
              <a class="nav-link  text-white font-weight-bold m-0 p-0" href="#"  title="" style="font-size: 16px;">
                <i class="fas fa-home  text-white  "></i>
               <span class="sidebar-text ">Dashboard</span>
                <i class="fas fa-sort-down text-white font-weight-bold  "style="float:right;"></i></a> </li>
            <!-- end of tabs -->


<!-- start of tabs -->
            <li class="  nav_tab" style="width:100%; float:left;">
              <a class="nav-link  text-white font-weight-bold m-0 p-0" href="#"  title="" style="font-size: 16px;">
                <i class="fas fa-home  text-white  "></i>
               <span class="sidebar-text ">Employees</span>
                <i class="fas fa-sort-down text-white font-weight-bold  "style="float:right;"></i></a> </li>
            <!-- end of tabs -->


			<!-- start of tabs -->
            <li class="  nav_tab" style="width:100%; float:left;">
              <a class="nav-link  text-white font-weight-bold m-0 p-0" href="#"  title="" style="font-size: 16px;">
                <i class="fas fa-home  text-white  "></i>
               <span class="sidebar-text ">Expenses</span>
                <i class="fas fa-sort-down text-white font-weight-bold  "style="float:right;"></i></a> </li>
            <!-- end of tabs -->



			<!-- start of tabs -->
            <li class="  nav_tab" style="width:100%; float:left;">
              <a class="nav-link  text-white font-weight-bold m-0 p-0" href="#"  title="" style="font-size: 16px;">
                <i class="fas fa-home  text-white  "></i>
               <span class="sidebar-text ">Careers</span>
                <i class="fas fa-sort-down text-white font-weight-bold  "style="float:right;"></i></a> </li>
            <!-- end of tabs -->








          </ul>
        </div>
      </div>
    </div>








  <!-- start of display page -->
<div class="col-md-10">
<div class="tab-content"><!-- start of tab 1 -->
<div class="tab-pane active " id="hr_employees">

<div class="row"><!-- row 1 start -->
<div  class="col-md-12 ">
<!-- start of alert -->


</div>
@if(session('message'))
<div class="row">
<div class="col-md-12 text-danger font-weight-bold text-white alert alert-danger text-center"  style="font-size: 18px;">
{{session('message')}}
</div>
</div>
@endif

<!-- ajax query success message here -->

<div class="col-md-12 text-center alert alert-success text-dark font-weight-bold" id="msg">

</div>

<!-- ajax query success message here -->


</div>
</div><!-- row 1 end -->




 <div class="row">  <!-- start of row 1-->

 <div class="col-md-12 pt-3 pb-3">

 <p class="text-dark font-weight-bold my-auto" style="font-weight: bold;float: left;"> Home / Dashboard / Employee</p>


<div class="btn-group" id="openmenu-btn"  style="float: right;">
<button type="button" class="btn btn-sm btn-success dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Employee
</button>

<div class="dropdown-container customDropdown">
<div class="dropdown-menu dropdown-menu-right customDropdownMenu" id="employee_dropdown" onClick="event.stopPropagation();" style="width: 390px;" >

<div class="container-fluid">


<div class="row">
<div class="col-md-12">

<form    enctype="multipart/form-data" id="submit_form" name="submit_form" action={{route('add_employee_ajax')}} >
 @csrf

 <!--
<span class="font-weight-bold ">Employee ID</span>
<input class="inp col-md-12" type="number"  id="id"   name="id" />
@if($errors->has('id'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;" >&spades;{{ $errors->first('id') }}</div>
@endif
-->
</div>
</div>


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

    <!--  <img class="logo mt-3 " src="{{url('../icons/files.png' )}}" width="55" height="55" style="opacity: 1;"> -->
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
<button type="button" class="btn " id="closebtn" style="background-color:#ff4f4e;">Close</button>
</div>

<div class="col-md-6 text-center">
<!-- style="background-color:#a31b78 " -->
  <input type="submit" name="submit" id="add_employee_btn" class="btn btn-success" />

 </div>

 </div>
  </div>

</form>
</div>
</div>
</div>
</div>
</div>


<!-- Button trigger modal -->


</button>
</div>
</div><!-- end of row 1-->

<div class="row p-2   "><!-- start of cards -->

<div class="col-md-3  ">
<div class="row p-1 ">
<div class="col-md-12  custom_badge text-center" style="background-color: #ffa319;">
<img class="logo mt-3 " src="{{url('../icons/e-1.png' )}}" width="55" height="55" style="opacity: 1;">
<p class="font-weight-bold text-white">Contracts</p>
</div>
</div>
</div>




 <div class="col-md-3  ">
<div class="row p-1 ">
<div class="col-md-12  custom_badge text-center" style="background-color: #007ffb;">
<img class="logo mt-3 " src="{{url('../icons/e_2.png' )}}" width="55" height="55" style="opacity: 1;">
<p class="font-weight-bold text-white">Salaries</p>
</div>
</div>
</div>



 <div class="col-md-3  ">
<div class="row p-1 ">
<div class="col-md-12  custom_badge text-center" style="background-color: #00e0a5;">
<img class="logo mt-3 " src="{{url('../icons/e_3.png' )}}" width="55" height="55" style="opacity: 1;">
<p class="font-weight-bold text-white">Complaints</p>
 </div>
</div>
</div>



 <div class="col-md-3  ">
<div class="row p-1 ">
<div class="col-md-12  custom_badge text-center" style="background-color: #bb64e4;">
<img class="logo mt-3 " src="{{url('../icons/e_4.png' )}}" width="55" height="55" style="opacity: 1;">
<p class="font-weight-bold text-white">Attendence</p>
</div>
</div>
</div>


</div><!-- end of cards -->


<!-- hideable button  -->

<div class="row mt-4">
<div class="col-md-12">
<button type="button" class="btn btn-sm btn-danger font-weight-bold" id="navigatable_btn_3" style="border:none;"> <i class="fas fa-sort-down text-white font-weight-bold mr-2 m-0 p-0"></i>All Employee</button>
</div>
</div>
          <!-- end hidebale button-->



<div class="row mt-3 ">
  <div class="col-md-8 d-flex flex-row justify-content-between">
   <!-- Material inline 1 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1">
  <label class="form-check-label" for="materialInline1">All</label>
</div>

<!-- Material inline 2 -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" id="materialInline2">
    <label class="form-check-label" for="materialInline2">Current Employee</label>
</div>

<!-- Material inline 3 -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" id="materialInline3">
    <label class="form-check-label" for="materialInline3">Internees</label>
</div>

<!-- Material inline 2 -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" id="materialInline2">
    <label class="form-check-label" for="materialInline2">Old Employee</label>
</div>
  </div>
  <div class="col-md-4"> </div>
</div>

<div id="renderEditModel" class="mt-2"></div>
<div class="row" id="div_table"></div>



</div>



    </div>
    <!-- end of display page -->
  </div>

  <script >


//start of ensert employee ajax function
// $.ajaxSetup({
  // headers: {
    // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  // }
// });
 $(document).ready(function (){

	$('#msg').hide();

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
                success: function(data) {
				  $('#msg').show();
                  $('#msg').html("Form has been Edited Succesfully !!!");
				  $('#msg').fadeOut(15000);
				$.get('{{URL::to("employee_table_view")}}',function(data){
				 $('#div_table').empty().append(data);
   $('#employee_edit_model').modal('hide');
});
                },
				 error: function (data) {
				console.log(data);

				 }
            });









 });//end of edit table employee



 


 //start of delete table employee
 $('#div_table').on('click','#delete',function(){
     var id=$(this).data('task');
$.get('{{URL::to("employee_table_delete")}}/'+id,function(data){
    	$('#msg').show();
        $('#msg').html("Employee has Been Sucessfully Deleted");
	 $('#div_table').empty().append(data);
   
});
});
 //end of delte_table_employee




 //end of form edit functionality
  });

$('#submit_form').submit(function () {
            event.preventDefault();

            $.ajax({
            url:$(this).attr('action'),
                type:'POST',
				 data:new FormData(this),
                contentType: false,
                processData: false,
                success: function(data) {
				$('#msg').show();
                  $('#msg').html("Form has been Submitted Succesfully !!!");
				  $('#employee_dropdown').hide();
				  	$('#msg').fadeOut(15000);
$.get('{{URL::to("employee_table_view")}}',function(data){
	 $('#div_table').empty().append(data);
});
                },
				 error: function (data) {
				var response = JSON.parse(data.responseText);
               var str = '';
               $.each(response.errors,function (i,item) {
                   var html = '<p class="alert alert-danger alert-dismissible"><strong>Error!!</strong> &nbsp;&nbsp; '+item+'&nbsp;&nbsp;&nbsp; <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>';
                   str = str + html;
               });
			   $('#msg').show();
               $('#msj').html(str);

				 }
            });

        });


//close edit employee model on close button
$('#renderEditModel').on('click','#closeBtn',function(){
$('#employee_edit_model').modal('hide');
});




// $(document).ready(function(){
//  // /   $('#employee_table').dataTable();
//    $('#div_table').on('click','#employee_table',function(){
//    	 $(this).dataTable();
// });


// });



$(document).ready(function(){
$('#div_table').on("click",'#employee_table',function(){
$('#employee_table').dataTable();
});


    
});
  </script>



</body>
<!-- add employee model -->



</html>

