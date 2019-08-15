

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>WebLinerz</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <script src="js/app.js" type="text/javascript" charset="utf-8" async defer></script>
        <script src="js/custom.js" type="text/javascript" charset="utf-8" async defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script>



<script type="text/javascript" src="~/Scripts/data-table/jquery.dataTables.js"></script> -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<!--Import jQuery before export.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


   


<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">


<style type="text/css" media="screen">
  .circle{
    border-radius: 50%;
width: 60px;
height:60px;
border: 1px solid black;
border-radius: 100px;
background-image: url('../images/profile.png' );
background-repeat: no-repeat;
background-size:cover;
  }
  .sidebar-text{
	font-size:12px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

  
  .circle_sidebar{
border-radius: 50%;
width: 50%;
height:60px;
background-image: url('../images/profile.png' );
background-repeat: no-repeat;
background-size:cover;
}

.custom_badge{
border-radius: 3px;
 }


.nav_tab:hover{
background-color: #9933CC;
}

.inp {
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid #03a8f45e;
    padding: 5px 15px;
    outline: none;
 }

[placeholder]:focus::-webkit-input-placeholder {
    transition: text-indent 0.4s 0.4s ease;
    text-indent: -100%;
    opacity: 1;
 }


.drag_files{
  border:1px dotted black;
  height: 130px;
  border-radius:3px;
}
.dropdown-container {
  position: relative;
}

.dropdown-menu {
  position: absolute;
  top: 100%; /* Bottom of button */
  right: 0;
  margin-left: -450px; /* More to the left */
  margin-top: 135px;
  border-radius: 0px;
}

.alert{
    border-radius:0px;
}



  </style>
  </head>

<body class="container-fluid">
  <!-- start of row -->

  <div class="row  h-100 border-warning border"><!-- start of navbar -->
   <div class="col-md-2 my-auto">
     <img class="logo" src="{{url('../images/wz logo-new.png' )}}" width="130" height="80" style="opacity: 1;">
   </div>




   <div class="col-md-6 my-auto  " >
     <p class="text-dark font-weight-bold my-auto" style="font-weight: bolder;font-size:20px;">HR PORTAL</p>
   </div>






   <div class="col-md-4 text-center  my-auto">
    <div class="row " >
      <div class="col-md-6 text-center  my-auto">
    <i class="fas fa-envelope-open-text " style="font-size: 30px;"></i>
     <i class="fas fa-bell ml-3" style="font-size: 30px;"></i>
     <i class="fas fa-users ml-3" style="font-size: 30px;"></i>
      </div>
      <div class="col-md-6 text-center  d-flex flex-row my-auto">

        <div class="circle border border-dark">

        </div>

        <div class="dropdown show ml-2 mt-3">
  <a class="btn btn-sm btn-outline-secondary dropdown-toggle"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Fisal Shehzad
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="#">Dashboard</a>
    <a class="dropdown-item" href="#">Security</a>
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

<p class="alert alert-danger text-danger font-weight-bold "  id="msj" style="font-size:20px;"></p>
</div>
@if(session('message'))
<div class="row">
<div class="col-md-12 text-danger font-weight-bold text-white alert alert-danger text-center" style="font-size: 18px;">
{{session('message')}}
</div>
</div>
@endif
</div>
</div><!-- row 1 end -->




 <div class="row">  <!-- start of row 1-->

 <div class="col-md-12 pt-3 pb-3">

 <p class="text-dark font-weight-bold my-auto" style="font-weight: bold;float: left;"> Home / Dashboard / Employee</p>
        

<div class="btn-group" id="openmenu-btn"  style="float: right;">
<button type="button" class="btn btn-secondary dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Employee
</button>

<div class="dropdown-container">
<div class="dropdown-menu " onClick="event.stopPropagation();" style="width: 390px;" >

<div class="container-fluid">


<div class="row">
<div class="col-md-12">

<form   enctype="multipart/form-data" id="myform" >

<span class="font-weight-bold ">Employee ID</span>
<input class="inp col-md-12" type="number"  id="id" name="id" />
@if($errors->has('id'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;" >&spades;{{ $errors->first('id') }}</div>
@endif
</div>
</div>


<div class="row">

<div class="col-md-12">

<span class="font-weight-bold ">Name</span>
<input class="inp col-md-12" type="text" placeholder="@example John Doe" id="name" min="3" max="20" name="name" />
@if($errors->has('name'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('name') }}</div>
@endif
</div>

<div class="col-md-12">
<span class="font-weight-bold  " >Email</span>
<input class="inp col-md-12" type="email" placeholder="@example JohnDoe@abc.com" id="email" name="email" />
@if($errors->has('email'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('email') }}</div>
@endif
</div>



<div class="col-md-12">
        <span class="font-weight-bold " >Password</span>
        <input class="inp col-md-12" type="password"  id="password" name="password" />
        @if($errors->has('password'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('password') }}</div>
@endif
</div>
</div>




<div class="col-md-12 mt-3 d-flex flex-row justify-content-between ">
  <!-- Material inline 1 -->
<div class="form-check form-check-inline" >
  <input type="radio" class="form-check-input" id="status" name="status" value="Contract">
  <label class="form-check-label font-weight-bold" for="materialInline1">Contact</label>

</div>

<!-- Material inline 2 -->
<div class="form-check form-check-inline" >
  <input type="radio" class="form-check-input" id="status" name="status" value="Probabtion">
  <label class="form-check-label font-weight-bold" for="materialInline2">Probabtion</label>
</div>


</div>


<div class="col-md-12 mt-3 ">

 <div class="row">

<div class="col-md-6">
<span class="font-weight-bold " >Duration To: </span>
  <input class="inp col-md-12" type="date" placeholder="@example JohnDoe@abc.com" id="start_date" name="start_date" />
  @if($errors->has('start_date'))
  <div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('start_date') }}</div>
  @endif
</div>


<div class="col-md-6">
  <span class="font-weight-bold  " >Duration From: </span>
  <input class="inp col-md-12" type="date" placeholder="@example JohnDoe@abc.com" id="end_date" name="end_date" />
  @if($errors->has('end_date'))
  <div class=" alert alert-danger  font-weight-bold m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('end_date') }}</div>
  @endif
</div>
</div>
</div>





  <div class="col-md-12 mt-3">
<span class="font-weight-bold  " >Salary</span>
<input class="inp col-md-12" type="number" placeholder="@30,000 PKR" min="1" max="100000" id="e_salary" name="e_salary" />
@if($errors->has('e_salary'))
  <div class=" alert alert-danger  font-weight-bold m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('e_salary') }}</div>
  @endif
</div>



<div class="col-md-12 drag_files mt-3">
<div class="row my-auto">

<div class="col-md-12 text-center mt-4" >

    <!--  <img class="logo mt-3 " src="{{url('../icons/files.png' )}}" width="55" height="55" style="opacity: 1;"> -->
 <input type="file" name="uploads[]" multiple>
 @if($errors->has('uploads'))
  <div class=" alert alert-danger  font-weight-bold mt-2 m-0 p-0" style="font-size:14px;">&spades;{{ $errors->first('uploads') }}</div>
  @endif
  
  
 
 
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
<button type="button" class="btn btn-outline-dark font-weight-bold" id="navigatable_btn_3" style="border:none;"> <i class="fas fa-sort-down text-danger font-weight-bold mr-5 m-0 p-0"></i>All Employee</button>
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



           


















      </div>
    </div>
    <!-- end of display page -->
  </div>

  <script >


//start of ensert employee ajax function 

$(document).ready(function(){

$(".add_employee_btn").click(function(e){
            e.preventDefault();
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
var id=$('#id').val();
var name=$('#name').val();
var password=$('#password').val();
var e_salary=$('#e_salary').val();
var start_date=$('#start_date').val();
var end_date=$('#end_date').val();
var email=$('#email').val();
var contract=$("input[name='status']:checked").val();
var token=$('#token').val();
 var files = $("input[name='uploads']").val();
            var fd = new FormData(this.form);
            $.ajax({
            url:"<?php echo url('/add_employee_test')?>",
                type:'POST',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data) {
                   cosnole.log(data);
                }
            });

        });


});





  </script>
<script>
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
</script>

</body>
<!-- add employee model -->



</html>

