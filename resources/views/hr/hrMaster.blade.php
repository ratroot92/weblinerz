
<!DOCTYPE html>

<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>WebLinerz | HR</title>

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

section{
padding: 0px;
margin: 0px;
}

.inner{
height: 100%;
width: 100%;
}

.outer{
height: 150px;
width: 100%;
border-radius: 2px;
}
.anchor{
text-decoration: none !important;

}

.icon{
font-size: 18px;

}
.fa-usps{
  font-size: 45px;
s
}

.logo{
padding: 0px;
margin: 0px;

}

  </style>
  </head>


<body >

<div class="container-fluid">

<header  id="header" class="">


<!-- header -->

<div class="row">
<div class="col-md-2 ">
<div class="logo">
<img class="logo" src="{{url('../images/wz logo-new.png' )}}" width="130" height="60" style="opacity: 1;">
</div>
</div>
<div class="col-md-6 bg-dark  ">
<div class="d-flex flex-row text-center">

<div>
  <i class="fab fa-usps text-white font-weight-bold mt-2"></i>
</div>

<div class="text-white font-weight-bold ml-5 mt-3" style="font-size: 22px;">HR PORTAL</div>
</div>


</div>
<div class="col-md-4 bg-dark ">
<div class="row">
<div class="col-md-12 text-center">
<div class="mt-3 float-left">
  <i class="far fa-envelope-open-text text-white font-weight-bold mr-1 icon"></i>
<i class="fas fa-bell text-white font-weight-bold ml-1 icon"></i>
</div>
<div class="float-right mt-2">
 <a href="{{URL::to('/adminLogout')}}" title=""> <button type="button" class="btn btn-outline-warning " ><i class="fas fa-sign-out-alt"></i>Logout</button></a>
</div>



</div>
</div>
</div>
</div>
</header><!-- header -->
<div class="row">
<div class="col-md-12">


<!-- Start dashboard -->
<div class="row">

<div class="col-md-2 bg-secondary p-0"><!-- col-md-2 -->
<div class="rounded-circle border border-dark">

</div>

<ul class="list-unstyled list-group ">
<li class="list-group-item p-0 "><a href="" class="nav-link" title="">Dashboard</a></li>
<li class="list-group-item p-0"><a href="" class="nav-link" title="">Employees</a></li>
<li class="list-group-item p-0"><a href="" class="nav-link" title="">Reports</a></li>
<li class="list-group-item p-0"><a href="" class="nav-link" title="">Expense</a></li>
<li class="list-group-item p-0"><a href="" class="nav-link" title="">Contracts</a></li>
</ul>




</div><!-- col-md-2 end  -->
<div class="col-md-10 p-0 m-0"><!-- col-md-10 -->
<!-- content -->
<script src="{{ asset('dist/jquery/dist/jquery.min.js') }}"></script>

<section id="yeildContent" class="container-fluid" id="mysection">
	@yield('content')
</section>



</div><!-- col-md-10 end -->
</div>
<!-- end dashboard -->
  <footer>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script src="{{asset('dist/bootstrap/dist/js/bootstrap.bundle.min.js')}}"type="text/javascript" charset="utf-8" async defer></script>
   </footer>
</div><!-- end of page   -->

<<<<<<< HEAD
@stack('footer')
=======

>>>>>>> c623a4e076e8b8ff10bcdb5e9df7b3c783725db4
</body>
</html>
