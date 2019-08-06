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

  .circle_sidebar{
border-radius: 50%;
width: 50%;
height:80px;

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


  </style>
  </head>

<body class="container-fluid">
  <!-- start of row -->

  <div class="row  h-100 border-warning border">
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



  </div>
  <!-- end of row -->

  <div class="row">
    <!-- start of side bar -->
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
        <div class="col-md-12 text-center border-white border">
           <p class="font-weight-bold text-white text-center my-auto ">Faisal Shehzad</p>
        </div>
       
      </div>
       <!-- end of row2 -->

<i class="fas fa-file-spreadsheet"></i>

      <div class="row " >
        <div class="col-md-12 m-0 p-1">
          <ul class="nav  d-flex flex-column m-0 p-0 ">

            <!-- start of tabs -->
            <li class=" m-0 pt-1 pb-2 pl-0 pr-0 nav_tab border border-warning" style="width:100%; float:left;">
              <a class="nav-link active text-white font-weight-bold m-0 p-0" href="#hr_dashboard" data-toggle="tab" title="" style="font-size: 16px;">
                <i class="fas fa-home font-weight-bold text-white p-2 mr-3 m-0 p-0 "></i>
                Dashboard
                <i class="fas fa-sort-down text-white font-weight-bold ml-5 m-0 p-0 pr-1 "style="float:right;"></i></i></a> </li>
            <!-- end of tabs -->


             <!-- start of tabs -->
            <li class=" m-0 mt-4 p-0 nav_tab" style="width:100%; float:left;">
              <a class="nav-link text-white font-weight-bold m-0 p-0"href="#hr_employees" data-toggle="tab"   title="" style="font-size: 16px;">
                <i class="fas fa-male font-weight-bold text-white p-2 mr-3 m-0 p-0 "></i>
             <span class="text-center">  &nbsp; Employees </span>
                <i class="fas fa-sort-down text-white font-weight-bold ml-5 m-0 p-0 pr-1 " style="float: right;" ></i></i></a> </li>
            <!-- end of tabs -->



             <!-- start of tabs -->
            <li class=" m-0 mt-4 p-0 nav_tab" style="width:100%; float:left;">
              <a class="nav-link text-white font-weight-bold m-0 p-0" href="#hr_careers" data-toggle="tab"  title="" style="font-size: 16px;">
                <i class="fab fa-angular font-weight-bold text-white p-2 mr-3 m-0 p-0 "></i>
               <span class="text-center">  Careers </span>
                <i class="fas fa-sort-down text-white font-weight-bold ml-5 m-0 p-0 pr-1 " style="float: right;"></i></i></a> </li>
            <!-- end of tabs -->

<i class=""></i>

             <!-- start of tabs -->
            <li class=" m-0 mt-4 p-0 nav_tab" style="width:100%; float:left;">
              <a class="nav-link text-white font-weight-bold m-0 p-0"href="#hr_expense" data-toggle="tab" title="" style="font-size: 16px;">
                <i class="far fa-file-excel font-weight-bold text-white p-2 mr-3 m-0 p-0 "></i>
                <span class="text-center">  Expense </span>
                <i class="fas fa-sort-down text-white font-weight-bold ml-5 m-0 p-0 pr-1 " style="float: right;"></i></i></a> </li>
            <!-- end of tabs -->


             <!-- start of tabs -->
            <li class="  m-0 mt-4 p-0 nav_tab" style="width:100%; float:left;">
              <a class="nav-link text-white font-weight-bold m-0 p-0" href="#hr_reports" data-toggle="tab" title="" style="font-size: 16px;">
                <i class="fas fa-american-sign-language-interpreting font-weight-bold text-white p-2 mr-2 m-0 p-0 "></i>
                  <span class="text-center"> Reports </span>
                <i class="fas fa-sort-down text-white font-weight-bold ml-5 m-0 p-0 pr-1 " style="float: right;"></i></i></a> </li>
            <!-- end of tabs -->
           
          </ul>
        </div>
      </div>
    </div>

    <!-- end of side bar -->
  <!-- start of display page -->
    <div class="col-md-10">
  
<div class="tab-content">
  <!-- start of tab 1 -->
  <div class="tab-pane active" id="hr_dashboard" role="tab-pane">
    
    
      <div class="row">  <!-- start of row 1-->
        <div class="col-md-12 pt-3 pb-3">
         <p class="text-dark font-weight-bold my-auto" style="font-weight: bold;"> home / dashboard</p>  
          </div>           
          </div><!-- end of row 1-->

          <div class="row p-2   ">

            <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-danger custom_badge text-center">
             
                   <img class="logo mt-3 " src="{{url('../icons/1-min.png' )}}" width="55" height="55" style="opacity: 1;">
         
     
               <p class="font-weight-bold text-white">Emoployees</p>
             </div>
            </div>
          </div>



              <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-primary custom_badge text-center">
                          <img class="logo mt-3 " src="{{url('../icons/2-min.png' )}}" width="55" height="55" style="opacity: 1;">
               <p class="font-weight-bold text-white">Carriers</p>
             </div>
            </div>
          </div>



 <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-warning custom_badge text-center">
                       <img class="logo mt-3 " src="{{url('../icons/3-min.png' )}}" width="55" height="55" style="opacity: 1;">
               <p class="font-weight-bold text-white">Expense</p>
             </div>
            </div>
          </div>



 <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-secondary custom_badge text-center">
                          <img class="logo mt-3 " src="{{url('../icons/4-min.png' )}}" width="55" height="55" style="opacity: 1;">
               <p class="font-weight-bold text-white">Reports</p>
             </div>
            </div>
          </div>
             
             
          </div>


          <!-- startr of row -->

            <div class="row mt-4">
              <div class="col-md-12">
              <button type="button" class="btn btn-outline-dark font-weight-bold" id="navigatable_btn_1" style="border:none;"> <i class="fas fa-sort-down text-danger font-weight-bold mr-5 m-0 p-0"></i>Todays Interviews</button>
              </div>
            </div>
          <!-- start of row -->




           <!-- startr of row -->

           <div class="row mt-4" id="navigatable_div_1" name="navigatable_div_1">
             <div class="col-md-12">
              <table class="table" id="table1">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
             </div>
           </div>
          <!-- start of row -->






          <!-- startr of row -->

            <div class="row mt-4">
              <div class="col-md-12">
              <button type="button" class="btn btn-outline-dark font-weight-bold" id="navigatable_btn_2" style="border:none;"> <i class="fas fa-sort-down text-danger font-weight-bold mr-5 m-0 p-0"></i>Todays Expense</button>
              </div>
            </div>
          <!-- start of row -->




           <!-- startr of row -->

           <div class="row mt-4" id="navigatable_div_2" name="navigatable_div_1">
             <div class="col-md-12">
              <table class="table" id="table2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
             </div>
           </div>
          <!-- start of row -->






        </div>




  <div class="tab-pane " id="hr_expense">

<p>this is expense tab </p>
   </div>



  <div class="tab-pane " id="hr_employees">

 <div class="row">  <!-- start of row 1-->
        <div class="col-md-12 pt-3 pb-3">
         <p class="text-dark font-weight-bold my-auto" style="font-weight: bold;"> Home / Dashboard / Employee</p>  
          </div>           
          </div><!-- end of row 1-->

          <div class="row p-2   ">

            <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-danger custom_badge text-center">
            <img class="logo mt-3 " src="{{url('../icons/e-1.png' )}}" width="55" height="55" style="opacity: 1;">
         
     
               <p class="font-weight-bold text-white">Contracts</p>
             </div>
            </div>
          </div>



              <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-primary custom_badge text-center">
                       <img class="logo mt-3 " src="{{url('../icons/e_2.png' )}}" width="55" height="55" style="opacity: 1;">
               <p class="font-weight-bold text-white">Salaries</p>
             </div>
            </div>
          </div>



 <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-warning custom_badge text-center">
                     <img class="logo mt-3 " src="{{url('../icons/e_3.png' )}}" width="55" height="55" style="opacity: 1;">
               <p class="font-weight-bold text-white">Complaints</p>
             </div>
            </div>
          </div>



 <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-secondary custom_badge text-center">
                       <img class="logo mt-3 " src="{{url('../icons/e_4.png' )}}" width="55" height="55" style="opacity: 1;">
               <p class="font-weight-bold text-white">Attendence</p>
             </div>
            </div>
          </div>
             
             
          </div>


          <!-- startr of row -->

            <div class="row mt-4">
              <div class="col-md-12">
              <button type="button" class="btn btn-outline-dark font-weight-bold" id="navigatable_btn_3" style="border:none;"> <i class="fas fa-sort-down text-danger font-weight-bold mr-5 m-0 p-0"></i>All Employee</button>
              </div>
            </div>
          <!-- start of row -->
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



           <!-- startr of row -->

           <div class="row mt-4" id="navigatable_div_3" name="navigatable_div_3">
             <div class="col-md-12">
              <table class="table " id="table3">
  <thead class="bg-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
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
              <table class="table" table="4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
             </div>
           </div>
          <!-- start of row -->
   </div>



   <div class="tab-pane " id="hr_careers">

<p>this is careeers tab </p>
   </div>



   <div class="tab-pane " id="hr_reports">

<p>this is careeers tab </p>
   </div>







</div><!-- end of tab-1 -->



      </div>
    </div>
    <!-- end of display page -->
  </div>

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
