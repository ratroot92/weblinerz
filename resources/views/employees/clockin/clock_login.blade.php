
<!DOCTYPE html>

<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		    <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>WebLinerz | Clock-In</title>

<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('dist/employee_dashboard.css') }}">
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('dist/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('dist/bootstrap-table/dist/bootstrap-table.min.css')}}">
<!-- MATERIAL ICONS-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<!-- <script src="{{asset('js/app.js')}}"type="text/javascript" charset="utf-8" async defer></script> -->

<!-- <script src="{{asset('dist/bootstrap-table/dist/bootstrap-table.min.js')}}"type="text/javascript" charset="utf-8" async defer></script> -->





<!-- bootstrap table -->

<!--Data Table-->




<style type="text/css" media="screen">
#header{
height: 30px;
}
.BTN{
width: 120px;
height: 60px;
border-radius: 0px;

}
.inp{

}

::-webkit-input-placeholder {
   text-align: center;
}

:-moz-placeholder { /* Firefox 18- */
   text-align: center;  
}

::-moz-placeholder {  /* Firefox 19+ */
   text-align: center;  
}

:-ms-input-placeholder {  
   text-align: center; 
}

</style>
  </head>


<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 bg-dark " id="header">
  <p class="text-white font-weight-bold float-left">Clock-IN</p>
    <p class="text-white font-weight-bold float-right">&copy; weblinerz.co.uk</p>
</div>   
</div>

<div class="jumbotron ">
 <div class="row">
   <div class="col-md-4"></div>
   <div class="col-md-4 bg-light">
  

  <input type="text" name="id" name="id" class="form-control form-control-lg mt-5 bg-white inp border border-danger" placeholder="userid" required/>

   <input type="password" name="password" name="password" class="form-control form-control-lg mt-5 bg-white border border-danger inp" placeholder="password" required/>

 <div class="d-flex flex-column">
    <div>
     <input type="submit" class="btn btn-primary float-right mt-5 BTN" name="submit" value="CLOCK-IN" >
   
  </div>
  <div>
     <input type="submit" class="btn btn-success float-right mt-5 BTN" name="login" value="LOG-IN">
  </div>
 </div>


<div >
 <input type="checkbox" name="rememberpassword" value="true"> Remember password<br>

</div>


<div class="form-group d-flex flex-column bg-secondary ">
<div class="float-right">
   <a href="" title="" class="nav-link text-warning font-weight-bold float-right">forgot password</a>
</div>

<a href="{{URL::to('/clocksignup')}}" title=""  class=" nav-link text-center font-weight-bold text-white" style="font-size: 20px;">Create a new employee account </a>
</div>




</div>

   </div>
   <div class="col-md-4"></div>
 </div>
</div>







<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script src="{{asset('dist/bootstrap/dist/js/bootstrap.bundle.min.js')}}"type="text/javascript" charset="utf-8" async defer></script>
</div>
</body>
</html>
