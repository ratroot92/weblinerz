<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebLinerz</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <script src="js/app.js" type="text/javascript" charset="utf-8" async defer></script>
        <script src="js/custom.js" type="text/javascript" charset="utf-8" async defer></script>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script>


      
<script type="text/javascript" src="~/Scripts/data-table/jquery.dataTables.js"></script> -->



<!--Import jQuery before export.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


    <!--Data Table-->
    <script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

    <!--Export table buttons-->
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
    <script type="text/javascript"  src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>

<!--Export table button CSS-->

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">


<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">


<style type="text/css" media="screen">
  

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
.sidebar-text{
	font-size:12px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
a{
text-decoration:none!important;
}


  </style>
  </head>

<body class="container-fluid">
  <!-- start of row -->

  <div class="row  h-100 border-warning border">
   <div class="col-md-2 my-auto">
     <img class="logo" src="{{url('../images/wz logo-new.png' )}}" width="130" height="80" style="opacity: 1;">
   </div>




   <div class="col-md-5 my-auto  " >
     <p class="text-dark font-weight-bold my-auto ml-3" style="font-weight: bolder;font-size:20px;">HR PORTAL</p>
   </div>

  




<div class="col-md-5 text-center  my-auto">
<div class="row " >
<div class="col-md-6 text-center  my-auto">
<i class="fas fa-envelope-open-text " style="font-size: 22px;"></i>
<i class="fas fa-bell ml-3" style="font-size: 22px;"></i>
<i class="fas fa-users ml-3" style="font-size: 22px;"></i>
</div>
<div class="col-md-6 text-center  d-flex flex-row my-auto">
<div>
<img src="/images/profile.png" width="50" height="50" class="rounded-circle border border-dark" alt="...">
</div>
</div>

<div class="dropdown show ml-2 mt-3">
<a class="btn btn-sm btn-outline-secondary dropdown-toggle"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Fisal Shehzad
  </a>

    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="#">Dashboard</a>
    <a class="dropdown-item" href="#">Security</a>
    <a class="dropdown-item" href="{{ route('hr.logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Logout</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
<form id="logout-form" action="{{ route('hr.logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>
</div>

</div>

</div>
</div><!-- end of header -->



  </div>
  <!-- end of row -->

  <div class="row">   <!-- start of side bar -->
 
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
</div><!-- end of side bar -->

   
  <!-- start of display page -->
    <div class="col-md-10">
	<!-- start of row -->
	<div class="row">
	<div class="col-md-12">
	
      <div class="row">  <!-- start of row 1-->
        <div class="col-md-12 pt-3 pb-3">
         <p class="text-dark font-weight-bold my-auto" style="font-weight: bold;"> home / dashboard</p>  
          </div>           
          </div><!-- end of row 1-->

          


			<div class="row ">
				
					<div class=" nav col-md-12 list-inline ">
						<!-- start of card -->
						<div class="p-1 col-md-3 ">	
						<a href="#hr_employees" class=" nav-link col-md-12 text-center  " data-toggle="tab" style="background-color:#fe8f96;"> <img class="logo mt-3 " src="{{url('../icons/1-min.png' )}}" width="55" height="55" ><p class="font-weight-bold text-white">Employees</p></a>
						
					</div><!-- end of card -->

						<div class="p-1 col-md-3">	<!-- start of card -->
						
						<a href="#hr_careers" class=" nav-link col-md-12 text-center  " data-toggle="tab" style="background-color:#6db7f2;"> <img class="logo mt-3 " src="{{url('../icons/2-min.png' )}}" width="55" height="55" ><p class="font-weight-bold text-white">Careers</p></a>
						
						</div><!-- end of card -->


						<div class="p-1 col-md-3">	<!-- start of card -->
						
						<a href="#hr_expense" class=" nav-link col-md-12 text-center  " data-toggle="tab" style="background-color:#b792db;"> <img class="logo mt-3 " src="{{url('../icons/3-min.png' )}}" width="55" height="55" ><p class="font-weight-bold text-white">Expense</p></a>
						
						</div><!-- end of card -->


							<div class="p-1 col-md-3">	<!-- start of card -->
						
						<a href="#hr_reports" class=" nav-link col-md-12 text-center  " data-toggle="tab" style="background-color:#8950e1;"> <img class="logo mt-3 " src="{{url('../icons/4-min.png' )}}" width="55" height="55" ><p class="font-weight-bold text-white">Reports</p></a>
						
						</div><!-- end of card -->










					</div>



			</div>





			</div>






      </div>
	

  


<div class="tab-content">
  <!-- start of tab 1 -->
  
	
<div class="tab-pane active" id="hr_dashboard" role="tab-pane"><!-- start of careers tabs --> 
   <p>dashboard content </p>
    
    </div><!-- end of dashboard tabs --> 


	
	<div class="tab-pane " id="hr_careers" role="tab-pane"><!-- start of careers tabs --> 
   <p>careers content </p>
    
    </div><!-- end of careers tabs --> 


<div class="tab-pane " id="hr_reports" role="tab-pane"><!-- start of reports tabs --> 
   <p>reports content </p>
    
    </div><!-- end of reports tabs --> 


<div class="tab-pane " id="hr_expense" role="tab-pane"><!-- start of expense tabs --> 
   <p>expense</p>
    
    </div><!-- end of expense tabs --> 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


	<div class="tab-pane " id="hr_employees" role="tab-pane">
  
  
          

            <div class="row mt-4">
              <div class="col-md-12">
              <button type="button" class="btn btn-outline-dark font-weight-bold" id="navigatable_btn_4" style="border:none;"> <i class="fas fa-sort-down text-danger font-weight-bold mr-5 m-0 p-0"></i>All Employees</button>
              </div>
            </div>
 

           <div class="row mt-4" id="navigatable_div_3" name="navigatable_div_3">
             <div class="col-md-12">



             <!-- starrt of view employees tab -->
                    <div class="conatiner-fluid">
                        <div class="row m-0 p-0">
                          <div class="col-md-12">
                          	<table class="table border border-danger" id="table3" style="font-size:9px;">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Employee ID</th>
                                            <th scope="col">Employee Name</th>
                                            <th scope="col">Employee Email</th>
                                            <th scope="col">Employee Mobile</th>
                                            <th scope="col">Employee Password</th>
                                            <th scope="col">Employee Contact</th>
                                            <th scope="col">Salary</th>
                                             <th scope="col">Start Date</th>
                                               <th scope="col">End Date </th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($employees as $a)


                                            <tr>
                                            <th scope="row">{{$a->id}}</th>
                                            <th scope="row">{{$a->name}}</th>
                                            <th scope="row">{{$a->email}}</th>
                                            <th scope="row">{{$a->mobile}}</th>
                                            <th scope="row">{{$a->password}}</th>
                                            <th scope="row">{{$a->contract}}</th>
                                            <th scope="row">{{$a->salary}}</th>
                                            <th scope="row">{{$a->start_date}}</th>
                                            <th scope="row">{{$a->end_date}}</th>







                                          </tr>
                                         @endforeach

                                        </tbody>
                                      </table>
                          </div>


             </div>
           </div>
          <!-- start of row -->






          <!-- startr of row -->

            <div class="row mt-4">
              <div class="col-md-12">
              <button type="button" class="btn btn-outline-dark font-weight-bold" id="navigatable_btn_4" style="border:none;"> <i class="fas fa-sort-down text-danger font-weight-bold mr-5 m-0 p-0"></i>Todays Expense</button>
              </div>
            </div>
          <!-- start of row -->




           <!-- startr of row -->

           <div class="row mt-4" id="navigatable_div_4" name="navigatable_div_4">
            <div class="col-md-12">
                          	<table class="table border border-danger" id="table3" style="font-size:9px;">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Employee ID</th>
                                            <th scope="col">Employee Name</th>
                                            <th scope="col">Employee Email</th>
                                            <th scope="col">Employee Mobile</th>
                                            <th scope="col">Employee Password</th>
                                            <th scope="col">Employee Contact</th>
                                            <th scope="col">Salary</th>
                                             <th scope="col">Start Date</th>
                                               <th scope="col">End Date </th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($employees as $a)


                                            <tr>
                                            <th scope="row">{{$a->id}}</th>
                                            <th scope="row">{{$a->name}}</th>
                                            <th scope="row">{{$a->email}}</th>
                                            <th scope="row">{{$a->mobile}}</th>
                                            <th scope="row">{{$a->password}}</th>
                                            <th scope="row">{{$a->contract}}</th>
                                            <th scope="row">{{$a->salary}}</th>
                                            <th scope="row">{{$a->start_date}}</th>
                                            <th scope="row">{{$a->end_date}}</th>







                                          </tr>
                                         @endforeach

                                        </tbody>
                                      </table>
                          </div>
           </div>
          <!-- start of row -->
   </div>









</div>
    
    </div><!-- end of tab 1-->
	
	
	
	
	
	
	
		</div><!-- end of tab-centent page -->
    
  </div><!-- end of col-md-12 -->

  <script >
      var div1 =document.getElementById("navigatable_div_1");
      var div2 =document.getElementById("navigatable_div_2");
        var div3 =document.getElementById("navigatable_div_3");
      var div4 =document.getElementById("navigatable_div_4");
        var btn1 =document.getElementById("navigatable_btn_1");
          var btn2 =document.getElementById("navigatable_btn_2");
          var btn3 =document.getElementById("navigatable_btn_3");
          var btn4 =document.getElementById("navigatable_btn_4");



          btn1.addEventListener('click',function(){
            var div_1 =document.getElementById("navigatable_div_1");
           if (div_1.style.display === "none") {
    div_1.style.display = "block";
  } else {
    div_1.style.display = "none";}
  });


          btn2.addEventListener('click',function(){
            var div_2 =document.getElementById("navigatable_div_2");
           if (div_2.style.display === "none") {
    div_2.style.display = "block";
  } else {
    div_2.style.display = "none";
  }

 });

          btn3.addEventListener('click',function(){
            var div_3 =document.getElementById("navigatable_div_3");
           if (div_3.style.display === "none") {
    div_3.style.display = "block";
  } else {
    div_3.style.display = "none";}
  });


          btn4.addEventListener('click',function(){
            var div_4 =document.getElementById("navigatable_div_4");
           if (div_4.style.display === "none") {
    div_4.style.display = "block";
  } else {
    div_4.style.display = "none";
  } });

$(document).ready(function(){
    $('#table1').dataTable();
});

$(document).ready(function(){
    $('#table2').dataTable();
});


$(document).ready(function(){
    $('#table3').dataTable();
});


$(document).ready(function(){
    $('#table4').dataTable();
});
          

  </script>


</body>

</html>
